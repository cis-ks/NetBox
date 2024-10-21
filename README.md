# PHP NetBox API/GraphQL Client

This is a simple fluent-based PHP client for the [NetBox](https://github.com/netbox-community/netbox/) API.

## Installation

```
composer require cis-bv/netbox-client
```

## Create Client-Instance

The URL (with or without /api) and the NetBox-Token can either be provided directly by passing to the Class Constructor or via (OS-provided) Environment-Variables:

```php
use Cis\NetBox\NetBoxApi;

// direct passing
$netBoxApi = new NetBoxApi('https://demo.netbox.dev', '3d7d31797de934a99a527a620514130980937b4c');

// using the Environment-Variables (OS or set)
putenv(NETBOX_API_URL, 'https://demo.netbox.dev');
putenv(NETBOX_TOKEN, '3d7d31797de934a99a527a620514130980937b4c');
$netBoxApi = new NetBoxApi();
```

## API

All API-calls are made fluently and are based on the URL of the endpoint. For Hypen-based paths you need to convert it to camelCase:

For retrieving data you omit the "Get"-Method. All filters ar passed in an array:
```php
use Cis\NetBox\NetBoxApi;

$netBoxApi = new NetBoxApi();

// Getting all Console-Ports
$consolePorts = $netBoxApi->dcim()->consolePorts();

// Getting all Console-Ports for a specific device
$consolePorts = $netBoxApi->dcim()->consolePorts(['device_id' => 12]);
```

For all Non-Get-Operations add the necessary Method to the End of the function name:

- ``Create`` for adding Models
- ``Put`` or ``Patch`` for updating Models
- ``Delete`` for deleting Models 

```php
// Creating a new Console Port
$consolePorts = $netBoxApi->dcim()->consolePortsCreate([
    'device' => 245,
    'name' => 'con'
]);
```

For Referencing a direct instance of a Model you need to add ById between the path and method and also reference the ID as the first parameter:

```php
use Cis\NetBox\NetBoxApi;
$netBoxApi = new NetBoxApi();

//Get a specific Interface:
$netBoxApi->dcim()->interfacesById(12);

//Delete a specific Console Port:
$netBoxApi->dcim()->consolePortsByIdDelete(234);
```

## GraphQL

To perform a GraphQL query you simply passing an Instance of the ``Cis\GqlBuilder\Query``-Class or a simple string with the query.

```php
use Cis\NetBox\NetBoxApi;
use Cis\GqlBuilder\Query;

$netBoxApi = new NetBoxApi();
$query = Query::create('device_list', selectionSet: ['id', 'name']);

$allDevices = $netBoxApi->graphQl($query);
```

## Return

All Functions return either an ``NetBoxResult`` or ``NetBoxGraphQlResult`` in case of a GraphQL-Query.

You can iterate over ``NetBoxResult`` and use it as Array, even if it is just on instance of a model.

It also holds additional information about the request:

```php
use Cis\NetBox\NetBoxApi;
$netBoxApi = new NetBoxApi();

$consolePorts = $netBoxApi->dcim()->consolePorts();

//Retrieve the status code of the request
$statusCode = $consolePorts->getStatusCode();

//Retrieve the plain Body
$body = $consolePorts->getBody();

//Retrieve the Result(s) always as array:
$results = $consolePorts->getResults();

//Use Result as Array
foreach ($consolePorts as $consolePort) {
    echo $consolePort->id . PHP_EOL;
}
```