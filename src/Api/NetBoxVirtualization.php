<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxVirtualization extends NetBoxApiAbstract
{
    private const string CLUSTER_GROUPS = 'virtualization/cluster-groups';
    private const string CLUSTER_TYPES = 'virtualization/cluster-types';
    private const string CLUSTERS = 'virtualization/clusters';
    private const string INTERFACES = 'virtualization/interfaces';
    private const string VIRTUAL_DISKS = 'virtualization/virtual-disks';
    private const string VIRTUAL_MACHINES = 'virtualization/virtual-machines';

    #region clusterGroups
    public function clusterGroups(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CLUSTER_GROUPS, $parameters);
    }

    public function clusterGroupsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CLUSTER_GROUPS, $parameters);
    }

    public function clusterGroupsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CLUSTER_GROUPS, $parameters);
    }

    public function clusterGroupsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CLUSTER_GROUPS, $parameters);
    }

    public function clusterGroupsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CLUSTER_GROUPS, $parameters);
    }

    public function clusterGroupsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CLUSTER_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function clusterGroupsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CLUSTER_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function clusterGroupsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CLUSTER_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function clusterGroupsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CLUSTER_GROUPS, ['id' => $id, ...$parameters]);
    }
    #endregion clusterGroups

    #region clusterTypes
    public function clusterTypes(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CLUSTER_TYPES, $parameters);
    }

    public function clusterTypesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CLUSTER_TYPES, $parameters);
    }

    public function clusterTypesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CLUSTER_TYPES, $parameters);
    }

    public function clusterTypesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CLUSTER_TYPES, $parameters);
    }

    public function clusterTypesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CLUSTER_TYPES, $parameters);
    }

    public function clusterTypesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CLUSTER_TYPES, ['id' => $id, ...$parameters]);
    }

    public function clusterTypesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CLUSTER_TYPES, ['id' => $id, ...$parameters]);
    }

    public function clusterTypesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CLUSTER_TYPES, ['id' => $id, ...$parameters]);
    }

    public function clusterTypesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CLUSTER_TYPES, ['id' => $id, ...$parameters]);
    }
    #endregion clusterTypes

    #region clusters
    public function clusters(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CLUSTERS, $parameters);
    }

    public function clustersCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CLUSTERS, $parameters);
    }

    public function clustersPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CLUSTERS, $parameters);
    }

    public function clustersPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CLUSTERS, $parameters);
    }

    public function clustersDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CLUSTERS, $parameters);
    }

    public function clustersById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CLUSTERS, ['id' => $id, ...$parameters]);
    }

    public function clustersByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CLUSTERS, ['id' => $id, ...$parameters]);
    }

    public function clustersByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CLUSTERS, ['id' => $id, ...$parameters]);
    }

    public function clustersByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CLUSTERS, ['id' => $id, ...$parameters]);
    }
    #endregion clusters

    #region interfaces
    public function interfaces(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::INTERFACES, $parameters);
    }

    public function interfacesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::INTERFACES, $parameters);
    }

    public function interfacesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::INTERFACES, $parameters);
    }

    public function interfacesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::INTERFACES, $parameters);
    }

    public function interfacesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::INTERFACES, $parameters);
    }

    public function interfacesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::INTERFACES, ['id' => $id, ...$parameters]);
    }

    public function interfacesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::INTERFACES, ['id' => $id, ...$parameters]);
    }

    public function interfacesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::INTERFACES, ['id' => $id, ...$parameters]);
    }

    public function interfacesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::INTERFACES, ['id' => $id, ...$parameters]);
    }
    #endregion interfaces

    #region virtualDisks
    public function virtualDisks(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_DISKS, $parameters);
    }

    public function virtualDisksCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::VIRTUAL_DISKS, $parameters);
    }

    public function virtualDisksPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_DISKS, $parameters);
    }

    public function virtualDisksPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_DISKS, $parameters);
    }

    public function virtualDisksDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_DISKS, $parameters);
    }

    public function virtualDisksById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_DISKS, ['id' => $id, ...$parameters]);
    }

    public function virtualDisksByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_DISKS, ['id' => $id, ...$parameters]);
    }

    public function virtualDisksByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_DISKS, ['id' => $id, ...$parameters]);
    }

    public function virtualDisksByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_DISKS, ['id' => $id, ...$parameters]);
    }
    #endregion virtualDisks

    #region virtualMachines
    public function virtualMachines(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_MACHINES, $parameters);
    }

    public function virtualMachinesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::VIRTUAL_MACHINES, $parameters);
    }

    public function virtualMachinesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_MACHINES, $parameters);
    }

    public function virtualMachinesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_MACHINES, $parameters);
    }

    public function virtualMachinesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_MACHINES, $parameters);
    }

    public function virtualMachinesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_MACHINES, ['id' => $id, ...$parameters]);
    }

    public function virtualMachinesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_MACHINES, ['id' => $id, ...$parameters]);
    }

    public function virtualMachinesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_MACHINES, ['id' => $id, ...$parameters]);
    }

    public function virtualMachinesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_MACHINES, ['id' => $id, ...$parameters]);
    }

    public function virtualMachinesByIdRenderConfig(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_MACHINES, ['id' => $id, 'submodule' => 'render-config', ...$parameters]);
    }
    #endregion virtualMachines
}