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

    #region circuitGroupAssignments
    public function circuitGroupAssignments(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters);
    }

    public function circuitGroupAssignmentsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters, $id);
    }

    public function circuitGroupAssignmentsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters, $id);
    }

    public function circuitGroupAssignmentsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters, $id);
    }

    public function circuitGroupAssignmentsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CIRCUIT_GROUP_ASSIGNMENTS, $parameters, $id);
    }
    #endregion circuitGroupAssignments

    #region circuitGroups
    public function circuitGroups(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CIRCUIT_GROUPS, $parameters);
    }

    public function circuitGroupsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CIRCUIT_GROUPS, $parameters, $id);
    }

    public function circuitGroupsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CIRCUIT_GROUPS, $parameters, $id);
    }

    public function circuitGroupsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CIRCUIT_GROUPS, $parameters, $id);
    }

    public function circuitGroupsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CIRCUIT_GROUPS, $parameters, $id);
    }
    #endregion circuitGroups

    #region circuitTerminations
    public function circuitTerminations(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CIRCUIT_TERMINATIONS, $parameters);
    }

    public function circuitTerminationsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CIRCUIT_TERMINATIONS, $parameters, $id);
    }

    public function circuitTerminationsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CIRCUIT_TERMINATIONS, $parameters, $id);
    }

    public function circuitTerminationsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CIRCUIT_TERMINATIONS, $parameters, $id);
    }

    public function circuitTerminationsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CIRCUIT_TERMINATIONS, $parameters, $id);
    }

    public function circuitTerminationsByIdPaths(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CIRCUIT_TERMINATIONS, $parameters, $id, 'paths');
    }
    #endregion circuitTerminations

    #region circuitTypes
    public function circuitTypes(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CIRCUIT_TYPES, $parameters);
    }

    public function circuitTypesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CIRCUIT_TYPES, $parameters, $id);
    }

    public function circuitTypesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CIRCUIT_TYPES, $parameters, $id);
    }

    public function circuitTypesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CIRCUIT_TYPES, $parameters, $id);
    }

    public function circuitTypesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CIRCUIT_TYPES, $parameters, $id);
    }
    #endregion circuitTypes

    #region circuits
    public function circuits(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CIRCUITS, $parameters);
    }

    public function circuitsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CIRCUITS, $parameters);
    }

    public function circuitsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CIRCUITS, $parameters);
    }

    public function circuitsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CIRCUITS, $parameters);
    }

    public function circuitsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CIRCUITS, $parameters);
    }

    public function circuitsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CIRCUITS, $parameters, $id);
    }

    public function circuitsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CIRCUITS, $parameters, $id);
    }

    public function circuitsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CIRCUITS, $parameters, $id);
    }

    public function circuitsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CIRCUITS, $parameters, $id);
    }
    #endregion circuits

    #region providerAccounts
    public function providerAccounts(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::PROVIDER_ACCOUNTS, $parameters);
    }

    public function providerAccountsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PROVIDER_ACCOUNTS, $parameters, $id);
    }

    public function providerAccountsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::PROVIDER_ACCOUNTS, $parameters, $id);
    }

    public function providerAccountsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::PROVIDER_ACCOUNTS, $parameters, $id);
    }

    public function providerAccountsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::PROVIDER_ACCOUNTS, $parameters, $id);
    }
    #endregion providerAccounts

    #region providerNetworks
    public function providerNetworks(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::PROVIDER_NETWORKS, $parameters);
    }

    public function providerNetworksById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PROVIDER_NETWORKS, $parameters, $id);
    }

    public function providerNetworksByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::PROVIDER_NETWORKS, $parameters, $id);
    }

    public function providerNetworksByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::PROVIDER_NETWORKS, $parameters, $id);
    }

    public function providerNetworksByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::PROVIDER_NETWORKS, $parameters, $id);
    }
    #endregion providerNetworks

    #region providers
    public function providers(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PROVIDERS, $parameters);
    }

    public function providersCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::PROVIDERS, $parameters);
    }

    public function providersPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::PROVIDERS, $parameters);
    }

    public function providersPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::PROVIDERS, $parameters);
    }

    public function providersDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::PROVIDERS, $parameters);
    }

    public function providersById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PROVIDERS, $parameters, $id);
    }

    public function providersByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::PROVIDERS, $parameters, $id);
    }

    public function providersByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::PROVIDERS, $parameters, $id);
    }

    public function providersByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::PROVIDERS, $parameters, $id);
    }
    #endregion providers
}