<?php

use Cis\NetBox\Exceptions\NetBoxMissingAuthenticationException;
use Cis\NetBox\Exceptions\NetBoxUrlValidationException;
use Cis\NetBox\NetBoxApi;
use Cis\NetBox\NetBoxGraphQlResult;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Client\ClientExceptionInterface;

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
    fwrite(STDERR, print_r($netBoxApi->circuits()->circuits(), true));
});