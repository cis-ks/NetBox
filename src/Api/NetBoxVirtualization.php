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
    public function clusterGroups(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CLUSTER_GROUPS, $parameters);
    }

    public function clusterGroupsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CLUSTER_GROUPS, $parameters);
    }

    public function clusterGroupsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CLUSTER_GROUPS, $parameters);
    }

    public function clusterGroupsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CLUSTER_GROUPS, $parameters);
    }

    public function clusterGroupsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CLUSTER_GROUPS, $parameters);
    }

    public function clusterGroupsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CLUSTER_GROUPS, $parameters, $id);
    }

    public function clusterGroupsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CLUSTER_GROUPS, $parameters, $id);
    }

    public function clusterGroupsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CLUSTER_GROUPS, $parameters, $id);
    }

    public function clusterGroupsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CLUSTER_GROUPS, $parameters, $id);
    }
    #endregion clusterGroups

    #region clusterTypes
    public function clusterTypes(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CLUSTER_TYPES, $parameters);
    }

    public function clusterTypesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CLUSTER_TYPES, $parameters);
    }

    public function clusterTypesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CLUSTER_TYPES, $parameters);
    }

    public function clusterTypesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CLUSTER_TYPES, $parameters);
    }

    public function clusterTypesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CLUSTER_TYPES, $parameters);
    }

    public function clusterTypesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CLUSTER_TYPES, $parameters, $id);
    }

    public function clusterTypesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CLUSTER_TYPES, $parameters, $id);
    }

    public function clusterTypesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CLUSTER_TYPES, $parameters, $id);
    }

    public function clusterTypesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CLUSTER_TYPES, $parameters, $id);
    }
    #endregion clusterTypes

    #region clusters
    public function clusters(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CLUSTERS, $parameters);
    }

    public function clustersCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CLUSTERS, $parameters);
    }

    public function clustersPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CLUSTERS, $parameters);
    }

    public function clustersPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CLUSTERS, $parameters);
    }

    public function clustersDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CLUSTERS, $parameters);
    }

    public function clustersById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CLUSTERS, $parameters, $id);
    }

    public function clustersByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CLUSTERS, $parameters, $id);
    }

    public function clustersByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CLUSTERS, $parameters, $id);
    }

    public function clustersByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CLUSTERS, $parameters, $id);
    }
    #endregion clusters

    #region interfaces
    public function interfaces(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::INTERFACES, $parameters);
    }

    public function interfacesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::INTERFACES, $parameters);
    }

    public function interfacesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::INTERFACES, $parameters);
    }

    public function interfacesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::INTERFACES, $parameters);
    }

    public function interfacesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::INTERFACES, $parameters);
    }

    public function interfacesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::INTERFACES, $parameters, $id);
    }

    public function interfacesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::INTERFACES, $parameters, $id);
    }

    public function interfacesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::INTERFACES, $parameters, $id);
    }

    public function interfacesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::INTERFACES, $parameters, $id);
    }
    #endregion interfaces

    #region virtualDisks
    public function virtualDisks(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VIRTUAL_DISKS, $parameters);
    }

    public function virtualDisksCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::VIRTUAL_DISKS, $parameters);
    }

    public function virtualDisksPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VIRTUAL_DISKS, $parameters);
    }

    public function virtualDisksPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VIRTUAL_DISKS, $parameters);
    }

    public function virtualDisksDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VIRTUAL_DISKS, $parameters);
    }

    public function virtualDisksById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VIRTUAL_DISKS, $parameters, $id);
    }

    public function virtualDisksByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VIRTUAL_DISKS, $parameters, $id);
    }

    public function virtualDisksByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VIRTUAL_DISKS, $parameters, $id);
    }

    public function virtualDisksByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VIRTUAL_DISKS, $parameters, $id);
    }
    #endregion virtualDisks

    #region virtualMachines
    public function virtualMachines(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VIRTUAL_MACHINES, $parameters);
    }

    public function virtualMachinesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::VIRTUAL_MACHINES, $parameters);
    }

    public function virtualMachinesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VIRTUAL_MACHINES, $parameters);
    }

    public function virtualMachinesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VIRTUAL_MACHINES, $parameters);
    }

    public function virtualMachinesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VIRTUAL_MACHINES, $parameters);
    }

    public function virtualMachinesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VIRTUAL_MACHINES, $parameters, $id);
    }

    public function virtualMachinesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VIRTUAL_MACHINES, $parameters, $id);
    }

    public function virtualMachinesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VIRTUAL_MACHINES, $parameters, $id);
    }

    public function virtualMachinesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VIRTUAL_MACHINES, $parameters, $id);
    }

    public function virtualMachinesByIdRenderConfig(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VIRTUAL_MACHINES, $parameters, $id, 'render-config');
    }
    #endregion virtualMachines
}