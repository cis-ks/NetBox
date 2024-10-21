<?php

use Cis\NetBox\Exceptions\NetBoxMissingAuthenticationException;
use Cis\NetBox\Exceptions\NetBoxUrlValidationException;
use Cis\NetBox\NetBoxApi;
use Cis\NetBox\NetBoxGraphQlResult;

const NETBOX_VERSION = "4.1";
const NETBOX_TOKEN = "92a04a610801ed7e62384ce510daa61539f6c5db";
const NETBOX_API_URL = 'https://demo.netbox.dev/api';

it('Test API Generation throws exception when missing Token', function () {
    $netBoxApi = new NetBoxApi();
})->throws(NetBoxMissingAuthenticationException::class);

it('Test API Generation throws URL exception when missing', function () {
    $netBoxApi = new NetBoxApi(apiToken: 'abc');
})->throws(RuntimeException::class);

it('Test API Generation throws URL when wrong', function () {
    $netBoxApi = new NetBoxApi(baseUrl: 'test', apiToken: 'abc');
})->throws(NetBoxUrlValidationException::class);

it('Test API Generation', function () {
    $netBoxApi = new NetBoxApi(baseUrl: NETBOX_API_URL, apiToken: NETBOX_TOKEN);
    $version = $netBoxApi->getNetBoxVersion();

    expect($netBoxApi)->toBeInstanceOf(NetBoxApi::class)
        ->and($netBoxApi->getBaseUrl())->toBe('https://demo.netbox.dev/')
        ->and($version)->toBe(NETBOX_VERSION);
});

it('Test GraphQL', function () {
    $netBoxApi = new NetBoxApi(baseUrl: NETBOX_API_URL, apiToken: NETBOX_TOKEN);
    $t = $netBoxApi->graphQl('query {device_list {id}}');
    expect($t)->toBeInstanceOf(NetBoxGraphQlResult::class)
        ->and($t->getData())->toBeObject()->toHaveProperty('device_list')
        ->and($t->getData()->device_list)->toBeArray();
});

it('Test Data For Circuits', function () {
    $netBoxApi = new NetBoxApi(NETBOX_API_URL, NETBOX_TOKEN);
//    fwrite(STDERR, print_r($netBoxApi->circuits()->circuits(), true));

    $device = $netBoxApi->dcim()->devices(['has_primary_ip' => '1']);
    $t = $device->getResults();
    $kl = true;
});

it('Check all Classes exists', function () {
    $schema = file_get_contents(rtrim(NETBOX_API_URL, '/') . '/schema/?format=json');

    $endpoints = array_filter(array_map(
        fn ($ep) => explode('/', preg_replace('/.*\/api\/(.*)/', '$1', $ep), 4),
        array_keys((array) json_decode($schema)->paths)
    ), fn ($ep) => !in_array($ep[0], ['schema', 'status']));

    $classes = array_unique(array_column($endpoints, 0));

    foreach ($classes as $class) {
        $endpointSlug = ucfirst(preg_replace_callback('/[-_]([a-zA-Z])/', fn ($m) => strtoupper($m[1]), $class));
        $className = 'Cis\NetBox\Api\NetBox' . $endpointSlug;
        expect(class_exists($className))->toBeTrue($className . ' don\'t exists');
    }
});

it('Check Plugin', function () {
    $netBoxApi = new NetBoxApi(NETBOX_API_URL, NETBOX_TOKEN);
});