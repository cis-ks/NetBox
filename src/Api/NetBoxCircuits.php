<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxCircuits extends NetBoxApiAbstract
{
    private const string CIRCUIT_GROUP_ASSIGNMENTS = 'circuits/circuit-group-assignments';
    private const string CIRCUIT_GROUPS = 'circuits/circuit-groups';
    private const string CIRCUIT_TERMINATIONS = 'circuits/circuit-terminations';
    private const string CIRCUIT_TYPES = 'circuits/circuit-types';
    private const string CIRCUITS = 'circuits/circuits';
    private const string PROVIDER_ACCOUNTS = 'circuits/provider-accounts';
    private const string PROVIDER_NETWORKS = 'circuits/provider-networks';
    private const string PROVIDERS = 'circuits/providers';
    private const string VIRTUAL_CIRCUIT_TERMINATIONS = 'circuits/virtual-circuit-terminations';
    private const string VIRTUAL_CIRCUIT_TYPES = 'circuits/virtual-circuit-types';
    private const string VIRTUAL_CIRCUITS = 'circuits/virtual-circuits';

    #region circuitGroupAssignments
    public function circuitGroupAssignments(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CIRCUIT_GROUP_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }

    public function circuitGroupAssignmentsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CIRCUIT_GROUP_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }

    public function circuitGroupAssignmentsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CIRCUIT_GROUP_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }

    public function circuitGroupAssignmentsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CIRCUIT_GROUP_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }
    #endregion circuitGroupAssignments

    #region circuitGroups
    public function circuitGroups(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CIRCUIT_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function circuitGroupsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CIRCUIT_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function circuitGroupsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CIRCUIT_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function circuitGroupsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CIRCUIT_GROUPS, ['id' => $id, ...$parameters]);
    }
    #endregion circuitGroups

    #region circuitTerminations
    public function circuitTerminations(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CIRCUIT_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function circuitTerminationsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CIRCUIT_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function circuitTerminationsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CIRCUIT_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function circuitTerminationsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CIRCUIT_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function circuitTerminationsByIdPaths(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CIRCUIT_TERMINATIONS, ['id' => $id, 'submodule' => 'paths', ...$parameters]);
    }
    #endregion circuitTerminations

    #region circuitTypes
    public function circuitTypes(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CIRCUIT_TYPES, ['id' => $id, ...$parameters]);
    }

    public function circuitTypesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CIRCUIT_TYPES, ['id' => $id, ...$parameters]);
    }

    public function circuitTypesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CIRCUIT_TYPES, ['id' => $id, ...$parameters]);
    }

    public function circuitTypesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CIRCUIT_TYPES, ['id' => $id, ...$parameters]);
    }
    #endregion circuitTypes

    #region circuits
    public function circuits(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CIRCUITS, $parameters);
    }

    public function circuitsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CIRCUITS, $parameters);
    }

    public function circuitsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CIRCUITS, $parameters);
    }

    public function circuitsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CIRCUITS, $parameters);
    }

    public function circuitsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CIRCUITS, $parameters);
    }

    public function circuitsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CIRCUITS, ['id' => $id, ...$parameters]);
    }

    public function circuitsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CIRCUITS, ['id' => $id, ...$parameters]);
    }

    public function circuitsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CIRCUITS, ['id' => $id, ...$parameters]);
    }

    public function circuitsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CIRCUITS, ['id' => $id, ...$parameters]);
    }
    #endregion circuits

    #region providerAccounts
    public function providerAccounts(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PROVIDER_ACCOUNTS, ['id' => $id, ...$parameters]);
    }

    public function providerAccountsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::PROVIDER_ACCOUNTS, ['id' => $id, ...$parameters]);
    }

    public function providerAccountsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::PROVIDER_ACCOUNTS, ['id' => $id, ...$parameters]);
    }

    public function providerAccountsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::PROVIDER_ACCOUNTS, ['id' => $id, ...$parameters]);
    }
    #endregion providerAccounts

    #region providerNetworks
    public function providerNetworks(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PROVIDER_NETWORKS, ['id' => $id, ...$parameters]);
    }

    public function providerNetworksByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::PROVIDER_NETWORKS, ['id' => $id, ...$parameters]);
    }

    public function providerNetworksByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::PROVIDER_NETWORKS, ['id' => $id, ...$parameters]);
    }

    public function providerNetworksByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::PROVIDER_NETWORKS, ['id' => $id, ...$parameters]);
    }
    #endregion providerNetworks

    #region providers
    public function providers(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PROVIDERS, $parameters);
    }

    public function providersCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::PROVIDERS, $parameters);
    }

    public function providersPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::PROVIDERS, $parameters);
    }

    public function providersPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::PROVIDERS, $parameters);
    }

    public function providersDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::PROVIDERS, $parameters);
    }

    public function providersById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PROVIDERS, ['id' => $id, ...$parameters]);
    }

    public function providersByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::PROVIDERS, ['id' => $id, ...$parameters]);
    }

    public function providersByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::PROVIDERS, ['id' => $id, ...$parameters]);
    }

    public function providersByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::PROVIDERS, ['id' => $id, ...$parameters]);
    }
    #endregion providers

    #region virtualCircuitTerminations
    public function virtualCircuitTerminations(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_CIRCUIT_TERMINATIONS, $parameters);
    }

    public function virtualCircuitTerminationsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::VIRTUAL_CIRCUIT_TERMINATIONS, $parameters);
    }

    public function virtualCircuitTerminationsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_CIRCUIT_TERMINATIONS, $parameters);
    }

    public function virtualCircuitTerminationsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_CIRCUIT_TERMINATIONS, $parameters);
    }

    public function virtualCircuitTerminationsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_CIRCUIT_TERMINATIONS, $parameters);
    }

    public function virtualCircuitTerminationsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_CIRCUIT_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function virtualCircuitTerminationsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_CIRCUIT_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function virtualCircuitTerminationsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_CIRCUIT_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function virtualCircuitTerminationsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_CIRCUIT_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function virtualCircuitTerminationsByIdPaths(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_CIRCUIT_TERMINATIONS, ['id' => $id, 'submodule' => 'paths', ...$parameters]);
    }
    #endregion virtualCircuitTerminations

    #region virtualCircuitTypes
    public function virtualCircuitTypes(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_CIRCUIT_TYPES, $parameters);
    }

    public function virtualCircuitTypesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::VIRTUAL_CIRCUIT_TYPES, $parameters);
    }

    public function virtualCircuitTypesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_CIRCUIT_TYPES, $parameters);
    }

    public function virtualCircuitTypesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_CIRCUIT_TYPES, $parameters);
    }

    public function virtualCircuitTypesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_CIRCUIT_TYPES, $parameters);
    }

    public function virtualCircuitTypesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_CIRCUIT_TYPES, ['id' => $id, ...$parameters]);
    }

    public function virtualCircuitTypesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_CIRCUIT_TYPES, ['id' => $id, ...$parameters]);
    }

    public function virtualCircuitTypesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_CIRCUIT_TYPES, ['id' => $id, ...$parameters]);
    }

    public function virtualCircuitTypesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_CIRCUIT_TYPES, ['id' => $id, ...$parameters]);
    }
    #endregion virtualCircuitTypes

    #region virtualCircuits
    public function virtualCircuits(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_CIRCUITS, $parameters);
    }

    public function virtualCircuitsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::VIRTUAL_CIRCUITS, $parameters);
    }

    public function virtualCircuitsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_CIRCUITS, $parameters);
    }

    public function virtualCircuitsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_CIRCUITS, $parameters);
    }

    public function virtualCircuitsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_CIRCUITS, $parameters);
    }

    public function virtualCircuitsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_CIRCUITS, ['id' => $id, ...$parameters]);
    }

    public function virtualCircuitsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_CIRCUITS, ['id' => $id, ...$parameters]);
    }

    public function virtualCircuitsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_CIRCUITS, ['id' => $id, ...$parameters]);
    }

    public function virtualCircuitsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_CIRCUITS, ['id' => $id, ...$parameters]);
    }
    #endregion virtualCircuits
}
