<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxIpam extends NetBoxApiAbstract
{
    private const string AGGREGATES = 'ipam/aggregates';
    private const string ASN_RANGES = 'ipam/asn-ranges';
    private const string ASNS = 'ipam/asns';
    private const string FHRP_GROUP_ASSIGNMENTS = 'ipam/fhrp-group-assignments';
    private const string FHRP_GROUPS = 'ipam/fhrp-groups';
    private const string IP_ADDRESSES = 'ipam/ip-addresses';
    private const string IP_RANGES = 'ipam/ip-ranges';
    private const string PREFIXES = 'ipam/prefixes';
    private const string RIRS = 'ipam/rirs';
    private const string ROLES = 'ipam/roles';
    private const string ROUTE_TARGETS = 'ipam/route-targets';
    private const string SERVICE_TEMPLATES = 'ipam/service-templates';
    private const string SERVICES = 'ipam/services';
    private const string VLAN_GROUPS = 'ipam/vlan-groups';
    private const string VLANS = 'ipam/vlans';
    private const string VRFS = 'ipam/vrfs';

    #region aggregates
    public function aggregates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::AGGREGATES, $parameters);
    }

    public function aggregatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::AGGREGATES, $parameters);
    }

    public function aggregatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::AGGREGATES, $parameters);
    }

    public function aggregatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::AGGREGATES, $parameters);
    }

    public function aggregatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::AGGREGATES, $parameters);
    }

    public function aggregatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::AGGREGATES, $parameters, $id);
    }

    public function aggregatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::AGGREGATES, $parameters, $id);
    }

    public function aggregatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::AGGREGATES, $parameters, $id);
    }

    public function aggregatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::AGGREGATES, $parameters, $id);
    }
    #endregion aggregates

    #region asnRanges
    public function asnRanges(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::ASN_RANGES, $parameters);
    }

    public function asnRangesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::ASN_RANGES, $parameters);
    }

    public function asnRangesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::ASN_RANGES, $parameters);
    }

    public function asnRangesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::ASN_RANGES, $parameters);
    }

    public function asnRangesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::ASN_RANGES, $parameters);
    }

    public function asnRangesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::ASN_RANGES, $parameters, $id);
    }

    public function asnRangesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::ASN_RANGES, $parameters, $id);
    }

    public function asnRangesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::ASN_RANGES, $parameters, $id);
    }

    public function asnRangesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::ASN_RANGES, $parameters, $id);
    }

    public function asnRangesByIdAvailableAsns(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::ASN_RANGES, $parameters, $id, 'available-asns');
    }
    #endregion asnRanges

    #region asns
    public function asns(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::ASNS, $parameters);
    }

    public function asnsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::ASNS, $parameters);
    }

    public function asnsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::ASNS, $parameters);
    }

    public function asnsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::ASNS, $parameters);
    }

    public function asnsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::ASNS, $parameters);
    }

    public function asnsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::ASNS, $parameters, $id);
    }

    public function asnsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::ASNS, $parameters, $id);
    }

    public function asnsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::ASNS, $parameters, $id);
    }

    public function asnsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::ASNS, $parameters, $id);
    }
    #endregion asns

    #region fhrpGroupAssignments
    public function fhrpGroupAssignments(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::FHRP_GROUP_ASSIGNMENTS, $parameters);
    }

    public function fhrpGroupAssignmentsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::FHRP_GROUP_ASSIGNMENTS, $parameters);
    }

    public function fhrpGroupAssignmentsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::FHRP_GROUP_ASSIGNMENTS, $parameters);
    }

    public function fhrpGroupAssignmentsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::FHRP_GROUP_ASSIGNMENTS, $parameters);
    }

    public function fhrpGroupAssignmentsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::FHRP_GROUP_ASSIGNMENTS, $parameters);
    }

    public function fhrpGroupAssignmentsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::FHRP_GROUP_ASSIGNMENTS, $parameters, $id);
    }

    public function fhrpGroupAssignmentsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::FHRP_GROUP_ASSIGNMENTS, $parameters, $id);
    }

    public function fhrpGroupAssignmentsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::FHRP_GROUP_ASSIGNMENTS, $parameters, $id);
    }

    public function fhrpGroupAssignmentsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::FHRP_GROUP_ASSIGNMENTS, $parameters, $id);
    }
    #endregion fhrpGroupAssignments

    #region fhrpGroups
    public function fhrpGroups(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::FHRP_GROUPS, $parameters);
    }

    public function fhrpGroupsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::FHRP_GROUPS, $parameters);
    }

    public function fhrpGroupsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::FHRP_GROUPS, $parameters);
    }

    public function fhrpGroupsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::FHRP_GROUPS, $parameters);
    }

    public function fhrpGroupsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::FHRP_GROUPS, $parameters);
    }

    public function fhrpGroupsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::FHRP_GROUPS, $parameters, $id);
    }

    public function fhrpGroupsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::FHRP_GROUPS, $parameters, $id);
    }

    public function fhrpGroupsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::FHRP_GROUPS, $parameters, $id);
    }

    public function fhrpGroupsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::FHRP_GROUPS, $parameters, $id);
    }
    #endregion fhrpGroups

    #region ipAddresses
    public function ipAddresses(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IP_ADDRESSES, $parameters);
    }

    public function ipAddressesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::IP_ADDRESSES, $parameters);
    }

    public function ipAddressesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IP_ADDRESSES, $parameters);
    }

    public function ipAddressesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IP_ADDRESSES, $parameters);
    }

    public function ipAddressesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IP_ADDRESSES, $parameters);
    }

    public function ipAddressesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IP_ADDRESSES, $parameters, $id);
    }

    public function ipAddressesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IP_ADDRESSES, $parameters, $id);
    }

    public function ipAddressesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IP_ADDRESSES, $parameters, $id);
    }

    public function ipAddressesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IP_ADDRESSES, $parameters, $id);
    }
    #endregion ipAddresses

    #region ipRanges
    public function ipRanges(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IP_RANGES, $parameters);
    }

    public function ipRangesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::IP_RANGES, $parameters);
    }

    public function ipRangesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IP_RANGES, $parameters);
    }

    public function ipRangesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IP_RANGES, $parameters);
    }

    public function ipRangesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IP_RANGES, $parameters);
    }

    public function ipRangesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IP_RANGES, $parameters, $id);
    }

    public function ipRangesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IP_RANGES, $parameters, $id);
    }

    public function ipRangesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IP_RANGES, $parameters, $id);
    }

    public function ipRangesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IP_RANGES, $parameters, $id);
    }

    public function ipRangesByIdAvailableIps(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IP_RANGES, $parameters, $id, 'available-ips');
    }
    #endregion ipRanges

    #region prefixes
    public function prefixes(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PREFIXES, $parameters);
    }

    public function prefixesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::PREFIXES, $parameters);
    }

    public function prefixesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::PREFIXES, $parameters);
    }

    public function prefixesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::PREFIXES, $parameters);
    }

    public function prefixesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::PREFIXES, $parameters);
    }

    public function prefixesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PREFIXES, $parameters, $id);
    }

    public function prefixesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::PREFIXES, $parameters, $id);
    }

    public function prefixesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::PREFIXES, $parameters, $id);
    }

    public function prefixesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::PREFIXES, $parameters, $id);
    }

    public function prefixesByIdAvailableIps(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PREFIXES, $parameters, $id, 'available-ips');
    }

    public function prefixesByIdAvailablePrefixes(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PREFIXES, $parameters, $id, 'available-prefixes');
    }
    #endregion prefixes

    #region rirs
    public function rirs(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::RIRS, $parameters);
    }

    public function rirsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::RIRS, $parameters);
    }

    public function rirsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::RIRS, $parameters);
    }

    public function rirsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::RIRS, $parameters);
    }

    public function rirsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::RIRS, $parameters);
    }

    public function rirsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::RIRS, $parameters, $id);
    }

    public function rirsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::RIRS, $parameters, $id);
    }

    public function rirsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::RIRS, $parameters, $id);
    }

    public function rirsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::RIRS, $parameters, $id);
    }
    #endregion rirs

    #region roles
    public function roles(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::ROLES, $parameters);
    }

    public function rolesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::ROLES, $parameters);
    }

    public function rolesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::ROLES, $parameters);
    }

    public function rolesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::ROLES, $parameters);
    }

    public function rolesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::ROLES, $parameters);
    }

    public function rolesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::ROLES, $parameters, $id);
    }

    public function rolesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::ROLES, $parameters, $id);
    }

    public function rolesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::ROLES, $parameters, $id);
    }

    public function rolesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::ROLES, $parameters, $id);
    }
    #endregion roles

    #region routeTargets
    public function routeTargets(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::ROUTE_TARGETS, $parameters);
    }

    public function routeTargetsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::ROUTE_TARGETS, $parameters);
    }

    public function routeTargetsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::ROUTE_TARGETS, $parameters);
    }

    public function routeTargetsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::ROUTE_TARGETS, $parameters);
    }

    public function routeTargetsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::ROUTE_TARGETS, $parameters);
    }

    public function routeTargetsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::ROUTE_TARGETS, $parameters, $id);
    }

    public function routeTargetsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::ROUTE_TARGETS, $parameters, $id);
    }

    public function routeTargetsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::ROUTE_TARGETS, $parameters, $id);
    }

    public function routeTargetsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::ROUTE_TARGETS, $parameters, $id);
    }
    #endregion routeTargets

    #region serviceTemplates
    public function serviceTemplates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SERVICE_TEMPLATES, $parameters);
    }

    public function serviceTemplatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::SERVICE_TEMPLATES, $parameters);
    }

    public function serviceTemplatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::SERVICE_TEMPLATES, $parameters);
    }

    public function serviceTemplatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::SERVICE_TEMPLATES, $parameters);
    }

    public function serviceTemplatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::SERVICE_TEMPLATES, $parameters);
    }

    public function serviceTemplatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SERVICE_TEMPLATES, $parameters, $id);
    }

    public function serviceTemplatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::SERVICE_TEMPLATES, $parameters, $id);
    }

    public function serviceTemplatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::SERVICE_TEMPLATES, $parameters, $id);
    }

    public function serviceTemplatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::SERVICE_TEMPLATES, $parameters, $id);
    }
    #endregion serviceTemplates

    #region services
    public function services(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SERVICES, $parameters);
    }

    public function servicesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::SERVICES, $parameters);
    }

    public function servicesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::SERVICES, $parameters);
    }

    public function servicesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::SERVICES, $parameters);
    }

    public function servicesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::SERVICES, $parameters);
    }

    public function servicesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SERVICES, $parameters, $id);
    }

    public function servicesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::SERVICES, $parameters, $id);
    }

    public function servicesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::SERVICES, $parameters, $id);
    }

    public function servicesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::SERVICES, $parameters, $id);
    }
    #endregion services

    #region vlanGroups
    public function vlanGroups(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VLAN_GROUPS, $parameters);
    }

    public function vlanGroupsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::VLAN_GROUPS, $parameters);
    }

    public function vlanGroupsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VLAN_GROUPS, $parameters);
    }

    public function vlanGroupsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VLAN_GROUPS, $parameters);
    }

    public function vlanGroupsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VLAN_GROUPS, $parameters);
    }

    public function vlanGroupsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VLAN_GROUPS, $parameters, $id);
    }

    public function vlanGroupsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VLAN_GROUPS, $parameters, $id);
    }

    public function vlanGroupsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VLAN_GROUPS, $parameters, $id);
    }

    public function vlanGroupsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VLAN_GROUPS, $parameters, $id);
    }

    public function vlanGroupsByIdAvailableVlans(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VLAN_GROUPS, $parameters, $id, 'available-vlans');
    }
    #endregion vlanGroups

    #region vlans
    public function vlans(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VLANS, $parameters);
    }

    public function vlansCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::VLANS, $parameters);
    }

    public function vlansPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VLANS, $parameters);
    }

    public function vlansPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VLANS, $parameters);
    }

    public function vlansDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VLANS, $parameters);
    }

    public function vlansById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VLANS, $parameters, $id);
    }

    public function vlansByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VLANS, $parameters, $id);
    }

    public function vlansByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VLANS, $parameters, $id);
    }

    public function vlansByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VLANS, $parameters, $id);
    }
    #endregion vlans

    #region vrfs
    public function vrfs(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VRFS, $parameters);
    }

    public function vrfsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::VRFS, $parameters);
    }

    public function vrfsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VRFS, $parameters);
    }

    public function vrfsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VRFS, $parameters);
    }

    public function vrfsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VRFS, $parameters);
    }

    public function vrfsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VRFS, $parameters, $id);
    }

    public function vrfsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VRFS, $parameters, $id);
    }

    public function vrfsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VRFS, $parameters, $id);
    }

    public function vrfsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VRFS, $parameters, $id);
    }
    #endregion vrfs
}