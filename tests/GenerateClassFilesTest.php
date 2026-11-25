<?php

namespace Cis\NetBox\Tests;

class GeneratorFiles
{
    public static array $files = [];
}

function file_get_contents(string $path): string
{
    return json_encode(['paths' => [
        '/api/authentication-check/' => ['get' => new \stdClass()],
        '/api/dcim/devices/' => ['get' => new \stdClass(), 'post' => new \stdClass()],
        '/api/dcim/devices/{id}/' => ['get' => new \stdClass(), 'patch' => new \stdClass()],
        '/api/dcim/devices/{id}/trace/' => ['get' => new \stdClass()],
        '/api/plugins/example/' => ['get' => new \stdClass()],
        '/api/schema/' => ['get' => new \stdClass()],
        '/api/status/' => ['get' => new \stdClass()],
    ]], JSON_THROW_ON_ERROR);
}

function file_put_contents(string $path, string $contents): int
{
    GeneratorFiles::$files[basename($path)] = $contents;
    return strlen($contents);
}

it('generates endpoint classes and the complete accessor trait from the schema', function () {
    // Isolate schema reads and generated writes; never contact or overwrite the real API.
    $source = \file_get_contents(dirname(__DIR__) . '/tools/generateClassFiles.php');
    eval('namespace ' . __NAMESPACE__ . ';' . substr($source, 5));

    expect(array_keys(GeneratorFiles::$files))->toBe([
        'NetBoxAuthenticationCheck.php',
        'NetBoxDcim.php',
        'NetBoxApiEndpoints.php',
    ]);

    $trait = GeneratorFiles::$files['NetBoxApiEndpoints.php'];
    expect($trait)
        ->toContain('function authenticationCheck(): NetBoxAuthenticationCheck')
        ->toContain('function dcim(): NetBoxDcim')
        ->toContain("function plugins(string|null \$plugin = null, string \$delimiter = '-'): NetBoxPlugins")
        ->toContain('return new NetBoxPlugins($this, $plugin, $delimiter);')
        ->not->toContain('function authentication-check(');

    expect(GeneratorFiles::$files['NetBoxAuthenticationCheck.php'])
        ->toContain("AUTHENTICATION_CHECK = 'authentication-check/'")
        ->toContain('function authenticationCheck(');

    $dcim = GeneratorFiles::$files['NetBoxDcim.php'];
    foreach (['devices(', 'devicesCreate(', 'devicesById(', 'devicesByIdPatch(', 'devicesByIdTrace('] as $signature) {
        expect($dcim)->toContain('function ' . $signature);
    }

    foreach (GeneratorFiles::$files as $contents) {
        // TOKEN_PARSE rejects invalid PHP in both classes and the trait.
        expect(token_get_all($contents, TOKEN_PARSE))->not->toBeEmpty();
    }
});
