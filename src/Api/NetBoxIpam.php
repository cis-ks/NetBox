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
    public function aggregates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::AGGREGATES, $parameters);
    }

    public function aggregatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::AGGREGATES, $parameters);
    }

    public function aggregatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::AGGREGATES, $parameters);
    }

    public function aggregatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::AGGREGATES, $parameters);
    }

    public function aggregatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::AGGREGATES, $parameters);
    }

    public function aggregatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::AGGREGATES, ['id' => $id, ...$parameters]);
    }

    public function aggregatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::AGGREGATES, ['id' => $id, ...$parameters]);
    }

    public function aggregatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::AGGREGATES, ['id' => $id, ...$parameters]);
    }

    public function aggregatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::AGGREGATES, ['id' => $id, ...$parameters]);
    }
    #endregion aggregates

    #region asnRanges
    public function asnRanges(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::ASN_RANGES, $parameters);
    }

    public function asnRangesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::ASN_RANGES, $parameters);
    }

    public function asnRangesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::ASN_RANGES, $parameters);
    }

    public function asnRangesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::ASN_RANGES, $parameters);
    }

    public function asnRangesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::ASN_RANGES, $parameters);
    }

    public function asnRangesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::ASN_RANGES, ['id' => $id, ...$parameters]);
    }

    public function asnRangesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::ASN_RANGES, ['id' => $id, ...$parameters]);
    }

    public function asnRangesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::ASN_RANGES, ['id' => $id, ...$parameters]);
    }

    public function asnRangesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::ASN_RANGES, ['id' => $id, ...$parameters]);
    }

    public function asnRangesByIdAvailableAsns(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::ASN_RANGES, ['id' => $id, 'submodule' => 'available-asns', ...$parameters]);
    }
    #endregion asnRanges

    #region asns
    public function asns(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::ASNS, $parameters);
    }

    public function asnsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::ASNS, $parameters);
    }

    public function asnsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::ASNS, $parameters);
    }

    public function asnsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::ASNS, $parameters);
    }

    public function asnsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::ASNS, $parameters);
    }

    public function asnsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::ASNS, ['id' => $id, ...$parameters]);
    }

    public function asnsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::ASNS, ['id' => $id, ...$parameters]);
    }

    public function asnsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::ASNS, ['id' => $id, ...$parameters]);
    }

    public function asnsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::ASNS, ['id' => $id, ...$parameters]);
    }
    #endregion asns

    #region fhrpGroupAssignments
    public function fhrpGroupAssignments(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::FHRP_GROUP_ASSIGNMENTS, $parameters);
    }

    public function fhrpGroupAssignmentsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::FHRP_GROUP_ASSIGNMENTS, $parameters);
    }

    public function fhrpGroupAssignmentsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::FHRP_GROUP_ASSIGNMENTS, $parameters);
    }

    public function fhrpGroupAssignmentsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::FHRP_GROUP_ASSIGNMENTS, $parameters);
    }

    public function fhrpGroupAssignmentsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::FHRP_GROUP_ASSIGNMENTS, $parameters);
    }

    public function fhrpGroupAssignmentsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::FHRP_GROUP_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }

    public function fhrpGroupAssignmentsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::FHRP_GROUP_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }

    public function fhrpGroupAssignmentsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::FHRP_GROUP_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }

    public function fhrpGroupAssignmentsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::FHRP_GROUP_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }
    #endregion fhrpGroupAssignments

    #region fhrpGroups
    public function fhrpGroups(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::FHRP_GROUPS, $parameters);
    }

    public function fhrpGroupsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::FHRP_GROUPS, $parameters);
    }

    public function fhrpGroupsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::FHRP_GROUPS, $parameters);
    }

    public function fhrpGroupsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::FHRP_GROUPS, $parameters);
    }

    public function fhrpGroupsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::FHRP_GROUPS, $parameters);
    }

    public function fhrpGroupsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::FHRP_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function fhrpGroupsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::FHRP_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function fhrpGroupsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::FHRP_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function fhrpGroupsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::FHRP_GROUPS, ['id' => $id, ...$parameters]);
    }
    #endregion fhrpGroups

    #region ipAddresses
    public function ipAddresses(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IP_ADDRESSES, $parameters);
    }

    public function ipAddressesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::IP_ADDRESSES, $parameters);
    }

    public function ipAddressesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IP_ADDRESSES, $parameters);
    }

    public function ipAddressesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IP_ADDRESSES, $parameters);
    }

    public function ipAddressesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IP_ADDRESSES, $parameters);
    }

    public function ipAddressesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IP_ADDRESSES, ['id' => $id, ...$parameters]);
    }

    public function ipAddressesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IP_ADDRESSES, ['id' => $id, ...$parameters]);
    }

    public function ipAddressesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IP_ADDRESSES, ['id' => $id, ...$parameters]);
    }

    public function ipAddressesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IP_ADDRESSES, ['id' => $id, ...$parameters]);
    }
    #endregion ipAddresses

    #region ipRanges
    public function ipRanges(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IP_RANGES, $parameters);
    }

    public function ipRangesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::IP_RANGES, $parameters);
    }

    public function ipRangesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IP_RANGES, $parameters);
    }

    public function ipRangesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IP_RANGES, $parameters);
    }

    public function ipRangesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IP_RANGES, $parameters);
    }

    public function ipRangesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IP_RANGES, ['id' => $id, ...$parameters]);
    }

    public function ipRangesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IP_RANGES, ['id' => $id, ...$parameters]);
    }

    public function ipRangesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IP_RANGES, ['id' => $id, ...$parameters]);
    }

    public function ipRangesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IP_RANGES, ['id' => $id, ...$parameters]);
    }

    public function ipRangesByIdAvailableIps(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IP_RANGES, ['id' => $id, 'submodule' => 'available-ips', ...$parameters]);
    }
    #endregion ipRanges

    #region prefixes
    public function prefixes(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PREFIXES, $parameters);
    }

    public function prefixesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::PREFIXES, $parameters);
    }

    public function prefixesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::PREFIXES, $parameters);
    }

    public function prefixesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::PREFIXES, $parameters);
    }

    public function prefixesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::PREFIXES, $parameters);
    }

    public function prefixesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PREFIXES, ['id' => $id, ...$parameters]);
    }

    public function prefixesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::PREFIXES, ['id' => $id, ...$parameters]);
    }

    public function prefixesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::PREFIXES, ['id' => $id, ...$parameters]);
    }

    public function prefixesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::PREFIXES, ['id' => $id, ...$parameters]);
    }

    public function prefixesByIdAvailableIps(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PREFIXES, ['id' => $id, 'submodule' => 'available-ips', ...$parameters]);
    }

    public function prefixesByIdAvailablePrefixes(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PREFIXES, ['id' => $id, 'submodule' => 'available-prefixes', ...$parameters]);
    }
    #endregion prefixes

    #region rirs
    public function rirs(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::RIRS, $parameters);
    }

    public function rirsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::RIRS, $parameters);
    }

    public function rirsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::RIRS, $parameters);
    }

    public function rirsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::RIRS, $parameters);
    }

    public function rirsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::RIRS, $parameters);
    }

    public function rirsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::RIRS, ['id' => $id, ...$parameters]);
    }

    public function rirsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::RIRS, ['id' => $id, ...$parameters]);
    }

    public function rirsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::RIRS, ['id' => $id, ...$parameters]);
    }

    public function rirsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::RIRS, ['id' => $id, ...$parameters]);
    }
    #endregion rirs

    #region roles
    public function roles(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::ROLES, $parameters);
    }

    public function rolesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::ROLES, $parameters);
    }

    public function rolesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::ROLES, $parameters);
    }

    public function rolesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::ROLES, $parameters);
    }

    public function rolesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::ROLES, $parameters);
    }

    public function rolesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::ROLES, ['id' => $id, ...$parameters]);
    }

    public function rolesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::ROLES, ['id' => $id, ...$parameters]);
    }

    public function rolesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::ROLES, ['id' => $id, ...$parameters]);
    }

    public function rolesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::ROLES, ['id' => $id, ...$parameters]);
    }
    #endregion roles

    #region routeTargets
    public function routeTargets(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::ROUTE_TARGETS, $parameters);
    }

    public function routeTargetsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::ROUTE_TARGETS, $parameters);
    }

    public function routeTargetsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::ROUTE_TARGETS, $parameters);
    }

    public function routeTargetsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::ROUTE_TARGETS, $parameters);
    }

    public function routeTargetsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::ROUTE_TARGETS, $parameters);
    }

    public function routeTargetsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::ROUTE_TARGETS, ['id' => $id, ...$parameters]);
    }

    public function routeTargetsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::ROUTE_TARGETS, ['id' => $id, ...$parameters]);
    }

    public function routeTargetsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::ROUTE_TARGETS, ['id' => $id, ...$parameters]);
    }

    public function routeTargetsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::ROUTE_TARGETS, ['id' => $id, ...$parameters]);
    }
    #endregion routeTargets

    #region serviceTemplates
    public function serviceTemplates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SERVICE_TEMPLATES, $parameters);
    }

    public function serviceTemplatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::SERVICE_TEMPLATES, $parameters);
    }

    public function serviceTemplatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::SERVICE_TEMPLATES, $parameters);
    }

    public function serviceTemplatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::SERVICE_TEMPLATES, $parameters);
    }

    public function serviceTemplatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::SERVICE_TEMPLATES, $parameters);
    }

    public function serviceTemplatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SERVICE_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function serviceTemplatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::SERVICE_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function serviceTemplatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::SERVICE_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function serviceTemplatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::SERVICE_TEMPLATES, ['id' => $id, ...$parameters]);
    }
    #endregion serviceTemplates

    #region services
    public function services(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SERVICES, $parameters);
    }

    public function servicesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::SERVICES, $parameters);
    }

    public function servicesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::SERVICES, $parameters);
    }

    public function servicesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::SERVICES, $parameters);
    }

    public function servicesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::SERVICES, $parameters);
    }

    public function servicesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SERVICES, ['id' => $id, ...$parameters]);
    }

    public function servicesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::SERVICES, ['id' => $id, ...$parameters]);
    }

    public function servicesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::SERVICES, ['id' => $id, ...$parameters]);
    }

    public function servicesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::SERVICES, ['id' => $id, ...$parameters]);
    }
    #endregion services

    #region vlanGroups
    public function vlanGroups(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VLAN_GROUPS, $parameters);
    }

    public function vlanGroupsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::VLAN_GROUPS, $parameters);
    }

    public function vlanGroupsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VLAN_GROUPS, $parameters);
    }

    public function vlanGroupsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VLAN_GROUPS, $parameters);
    }

    public function vlanGroupsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VLAN_GROUPS, $parameters);
    }

    public function vlanGroupsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VLAN_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function vlanGroupsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VLAN_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function vlanGroupsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VLAN_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function vlanGroupsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VLAN_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function vlanGroupsByIdAvailableVlans(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VLAN_GROUPS, ['id' => $id, 'submodule' => 'available-vlans', ...$parameters]);
    }
    #endregion vlanGroups

    #region vlans
    public function vlans(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VLANS, $parameters);
    }

    public function vlansCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::VLANS, $parameters);
    }

    public function vlansPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VLANS, $parameters);
    }

    public function vlansPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VLANS, $parameters);
    }

    public function vlansDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VLANS, $parameters);
    }

    public function vlansById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VLANS, ['id' => $id, ...$parameters]);
    }

    public function vlansByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VLANS, ['id' => $id, ...$parameters]);
    }

    public function vlansByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VLANS, ['id' => $id, ...$parameters]);
    }

    public function vlansByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VLANS, ['id' => $id, ...$parameters]);
    }
    #endregion vlans

    #region vrfs
    public function vrfs(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VRFS, $parameters);
    }

    public function vrfsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::VRFS, $parameters);
    }

    public function vrfsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VRFS, $parameters);
    }

    public function vrfsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VRFS, $parameters);
    }

    public function vrfsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VRFS, $parameters);
    }

    public function vrfsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VRFS, ['id' => $id, ...$parameters]);
    }

    public function vrfsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VRFS, ['id' => $id, ...$parameters]);
    }

    public function vrfsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VRFS, ['id' => $id, ...$parameters]);
    }

    public function vrfsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VRFS, ['id' => $id, ...$parameters]);
    }
    #endregion vrfs
}