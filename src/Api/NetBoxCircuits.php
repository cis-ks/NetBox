<?php

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxApi;
use Cis\NetBox\NetBoxResult;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;

class NetBoxCircuits
{
    private const string CIRCUIT_GROUP_ASSIGNMENTS = 'circuits/circuit-group-assignments';
    private const string CIRCUIT_GROUPS = 'circuits/circuit-groups';
    private const string CIRCUIT_TERMINATIONS = 'circuits/circuit-terminations';
    private const string CIRCUIT_TYPES = 'circuits/circuit-types';
    private const string CIRCUITS = 'circuits/circuits';
    private const string PROVIDER_ACCOUNTS = 'circuits/provider-accounts';
    private const string PROVIDER_NETWORKS = 'circuits/provider-networks';
    private const string PROVIDERS = 'circuits/providers';

    public function __construct(
        private readonly NetBoxApi $api,
    ) {}

    #region circuitGroupAssignments
    public function circuitGroupAssignments(array $parameters = []): NetBoxResult
    {
        return $this->api->get(self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsCreate(array $parameters = []): NetBoxResult
    {
        return $this->api->post(self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsDelete(array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsPatch(array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsPut(array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsByIdDelete(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::CIRCUIT_GROUP_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }

    public function circuitGroupAssignmentsByIdPatch(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::CIRCUIT_GROUP_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }

    public function circuitGroupAssignmentsByIdPut(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::CIRCUIT_GROUP_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }
    #endregion

    #region CircuitGroups
    public function circuitGroups(array $parameters = []): NetBoxResult
    {
        return $this->api->get(self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsCreate(array $parameters = []): NetBoxResult
    {
        return $this->api->post(self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsDelete(array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsPatch(array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsPut(array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsByIdDelete(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::CIRCUIT_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function circuitGroupsByIdPatch(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::CIRCUIT_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function circuitGroupsByIdPut(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::CIRCUIT_GROUPS, ['id' => $id, ...$parameters]);
    }
    #endregion

    #region circuitTerminations
    public function circuitTerminations(array $parameters = []): NetBoxResult
    {
        return $this->api->get(self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsCreate(array $parameters = []): NetBoxResult
    {
        return $this->api->post(self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsDelete(array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsPatch(array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsPut(array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsByIdDelete(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::CIRCUIT_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function circuitTerminationsByIdPatch(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::CIRCUIT_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function circuitTerminationsByIdPut(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::CIRCUIT_TERMINATIONS, ['id' => $id, ...$parameters]);
    }
    #endregion

    #region circuitTypes
    public function circuitTypes(array $parameters = []): NetBoxResult
    {
        return $this->api->get(self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesCreate(array $parameters = []): NetBoxResult
    {
        return $this->api->post(self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesDelete(array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesPatch(array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesPut(array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesByIdDelete(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::CIRCUIT_TYPES, ['id' => $id, ...$parameters]);
    }

    public function circuitTypesByIdPatch(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::CIRCUIT_TYPES, ['id' => $id, ...$parameters]);
    }

    public function circuitTypesByIdPut(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::CIRCUIT_TYPES, ['id' => $id, ...$parameters]);
    }
    #endregion

    #region circuits
    public function circuits(array $parameters = []): NetBoxResult
    {
        return $this->api->get(self::CIRCUITS, $parameters);
    }

    public function circuitsCreate(array $parameters = []): NetBoxResult
    {
        return $this->api->post(self::CIRCUITS, $parameters);
    }

    public function circuitsDelete(array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::CIRCUITS, $parameters);
    }

    public function circuitsPatch(array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::CIRCUITS, $parameters);
    }

    public function circuitsPut(array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::CIRCUITS, $parameters);
    }

    public function circuitsByIdDelete(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::CIRCUITS, ['id' => $id, ...$parameters]);
    }

    public function circuitsByIdPatch(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::CIRCUITS, ['id' => $id, ...$parameters]);
    }

    public function circuitsByIdPut(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::CIRCUITS, ['id' => $id, ...$parameters]);
    }
    #endregion

    #region providerAccounts
    public function providerAccounts(array $parameters = []): NetBoxResult
    {
        return $this->api->get(self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsCreate(array $parameters = []): NetBoxResult
    {
        return $this->api->post(self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsDelete(array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsPatch(array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsPut(array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsByIdDelete(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::PROVIDER_ACCOUNTS, ['id' => $id, ...$parameters]);
    }

    public function providerAccountsByIdPatch(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::PROVIDER_ACCOUNTS, ['id' => $id, ...$parameters]);
    }

    public function providerAccountsByIdPut(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::PROVIDER_ACCOUNTS, ['id' => $id, ...$parameters]);
    }
    #endregion

    #region providerNetworks
    public function providerNetworks(array $parameters = []): NetBoxResult
    {
        return $this->api->get(self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksCreate(array $parameters = []): NetBoxResult
    {
        return $this->api->post(self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksDelete(array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksPatch(array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksPut(array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksByIdDelete(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::PROVIDER_NETWORKS, ['id' => $id, ...$parameters]);
    }

    public function providerNetworksByIdPatch(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::PROVIDER_NETWORKS, ['id' => $id, ...$parameters]);
    }

    public function providerNetworksByIdPut(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::PROVIDER_NETWORKS, ['id' => $id, ...$parameters]);
    }
    #endregion

    #region providers
    public function providers(array $parameters = []): NetBoxResult
    {
        return $this->api->get(self::PROVIDERS, $parameters);
    }

    public function providersCreate(array $parameters = []): NetBoxResult
    {
        return $this->api->post(self::PROVIDERS, $parameters);
    }

    public function providersDelete(array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::PROVIDERS, $parameters);
    }

    public function providersPatch(array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::PROVIDERS, $parameters);
    }

    public function providersPut(array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::PROVIDERS, $parameters);
    }

    public function providersByIdDelete(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->delete(self::PROVIDERS, ['id' => $id, ...$parameters]);
    }

    public function providersByIdPatch(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->patch(self::PROVIDERS, ['id' => $id, ...$parameters]);
    }

    public function providersByIdPut(int $id, array $parameters = []): NetBoxResult
    {
        return $this->api->put(self::PROVIDERS, ['id' => $id, ...$parameters]);
    }
    #endregion
}