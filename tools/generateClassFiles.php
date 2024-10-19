<?php

use Cis\NetBox\NetBoxApi;

if (file_exists('../vendor/autoload.php')) {
    require '../vendor/autoload.php';
}

const NETBOX_API_URL = "https://demo.netbox.dev/api";
const LINE_INDENT = 4;

$endpoints = [];
$classes = [];

$schema = file_get_contents(rtrim(NETBOX_API_URL, '/') . '/schema/?format=json');
$paths = (array)json_decode($schema)->paths;

foreach (array_keys($paths) as $path) {
    $parts = explode('/', preg_replace('/.*\/api\/(.*)/', '$1', $path), 5);
    if (in_array($parts[0], ['plugins', 'status', 'schema'])) {
        continue;
    }
    $classes[] = $parts[0];
    $endpoints[] = [
        'parts' => $parts,
        'methods' => array_keys((array)$paths[$path])
    ];
}

$classes = array_unique($classes);

$baseFunctions = ['get' => '', 'post' => 'Create', 'delete' => 'Delete', 'patch' => 'Patch', 'put' => 'Put'];

$constTemplate = "\tprivate const string %s = '%s/%s';";
$functionHeaderTemplate = "\t#region %s";
$functionFooterTemplate = "\t#endregion %s\n";
$baseFunctionTemplate = "\tpublic function %s%s%s(%sarray \$parameters = []): NetBoxResult\n\t{\n\t\treturn \$this->api->%s(self::%s, %s\$parameters%s);\n\t}\n";

$missingClasses = [];

$apiReflection = new ReflectionClass(NetBoxApi::class);

foreach ($classes as $class) {
    $consts = [];
    $functions = [];
    $lastEndpoint = '';

    $endpointSlug = ucfirst(preg_replace_callback('/[-_]([a-zA-Z])/', fn ($m) => strtoupper($m[1]), $class));
    $className = 'Cis\NetBox\Api\NetBox' . $endpointSlug;
    $classEndpoints = array_filter($endpoints, fn ($ep) => $ep['parts'][0] == $class);

    if (!$apiReflection->hasMethod($class)) {
        $missingClasses[] = sprintf(
            "\tpublic function %s(): NetBox%s\n\t{\n\t\treturn new NetBox%s(\$this);\n\t}\n",
            $class,
            $endpointSlug,
            $endpointSlug,
        );
    }

    foreach ($classEndpoints as $endpoint) {
        $constName = strtoupper(str_replace('-', '_', $endpoint['parts'][1]));
        $functionName = preg_replace_callback('/-([a-z])/', fn ($m) => strtoupper($m[1]), $endpoint['parts'][1]);

        if (!array_key_exists($endpoint['parts'][1], $consts)) {
            $consts[$endpoint['parts'][1]] = sprintf($constTemplate, $constName, $endpoint['parts'][0], $endpoint['parts'][1]);
        }

        if ($lastEndpoint !== $endpoint['parts'][1]) {
            if ($lastEndpoint !== '') {
                $functions[] = sprintf(
                    $functionFooterTemplate,
                    preg_replace_callback('/-([a-z])/', fn ($m) => strtoupper($m[1]), $lastEndpoint)
                );
            }
            $functions[] = sprintf($functionHeaderTemplate, $functionName);
        }

        $byId = array_key_exists(2, $endpoint['parts']) && trim($endpoint['parts'][2]) == '{id}';

        if ($byId && trim($endpoint['parts'][3]) != '') {
            $functions[] = sprintf(
                $baseFunctionTemplate,
                $functionName,
                'ById',
                preg_replace_callback(
                    '/-([a-z])/',
                    fn ($m) => strtoupper($m[1]),
                    ucfirst(strtolower(trim($endpoint['parts'][3])))
                ),
                'int $id, ',
                'get',
                $constName,
                "['id' => \$id, 'submodule' => '{$endpoint["parts"][3]}', ...",
                "]"
            );
        } elseif (in_array(trim($endpoint['parts'][2]), ['', '{id}'])) {
            foreach ($endpoint['methods'] as $method) {
                $functions[] = sprintf(
                    $baseFunctionTemplate,
                    $functionName,
                    $byId ? 'ById' : '',
                    $baseFunctions[$method],
                    $byId ? 'int $id, ' : '',
                    $method,
                    $constName,
                    $byId ? '[\'id\' => $id, ...' : '',
                    $byId ? ']' : ''
                );
            }
        }

        $lastEndpoint = $endpoint['parts'][1];
    }
    $functions[] = sprintf($functionFooterTemplate, $functionName);

    $classString = str_replace("\n\n\t#endregion", "\n\t#endregion", sprintf(
        "<?php\n\nnamespace Cis\NetBox\Api;\n\nuse Cis\NetBox\NetBoxApi;\nuse Cis\NetBox\NetBoxResult;\n\n\nclass NetBox%s\n{\n%s\n\n\tpublic function __construct(\n\t\tprivate readonly NetBoxApi \$api,\n\t) {}\n\n%s}",
        $endpointSlug,
        implode("\n", $consts),
        implode("\n", $functions)
    ));

    $fileName = str_replace('tools', 'src', __DIR__) . DIRECTORY_SEPARATOR . 'Api' . DIRECTORY_SEPARATOR . 'NetBox' . $endpointSlug . '.php';
    file_put_contents($fileName, str_replace("\t", str_repeat(" ", LINE_INDENT), $classString));
}

echo str_replace("\t", str_repeat(" ", LINE_INDENT), implode("\n", $missingClasses));