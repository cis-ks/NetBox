<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxTenancy extends NetBoxApiAbstract
{
    private const string CONTACT_ASSIGNMENTS = 'tenancy/contact-assignments';
    private const string CONTACT_GROUPS = 'tenancy/contact-groups';
    private const string CONTACT_ROLES = 'tenancy/contact-roles';
    private const string CONTACTS = 'tenancy/contacts';
    private const string TENANT_GROUPS = 'tenancy/tenant-groups';
    private const string TENANTS = 'tenancy/tenants';

    #region contactAssignments
    public function contactAssignments(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONTACT_ASSIGNMENTS, $parameters);
    }

    public function contactAssignmentsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CONTACT_ASSIGNMENTS, $parameters);
    }

    public function contactAssignmentsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONTACT_ASSIGNMENTS, $parameters);
    }

    public function contactAssignmentsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONTACT_ASSIGNMENTS, $parameters);
    }

    public function contactAssignmentsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONTACT_ASSIGNMENTS, $parameters);
    }

    public function contactAssignmentsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONTACT_ASSIGNMENTS, $parameters, $id);
    }

    public function contactAssignmentsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONTACT_ASSIGNMENTS, $parameters, $id);
    }

    public function contactAssignmentsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONTACT_ASSIGNMENTS, $parameters, $id);
    }

    public function contactAssignmentsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONTACT_ASSIGNMENTS, $parameters, $id);
    }
    #endregion contactAssignments

    #region contactGroups
    public function contactGroups(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONTACT_GROUPS, $parameters);
    }

    public function contactGroupsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CONTACT_GROUPS, $parameters);
    }

    public function contactGroupsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONTACT_GROUPS, $parameters);
    }

    public function contactGroupsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONTACT_GROUPS, $parameters);
    }

    public function contactGroupsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONTACT_GROUPS, $parameters);
    }

    public function contactGroupsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONTACT_GROUPS, $parameters, $id);
    }

    public function contactGroupsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONTACT_GROUPS, $parameters, $id);
    }

    public function contactGroupsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONTACT_GROUPS, $parameters, $id);
    }

    public function contactGroupsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONTACT_GROUPS, $parameters, $id);
    }
    #endregion contactGroups

    #region contactRoles
    public function contactRoles(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONTACT_ROLES, $parameters);
    }

    public function contactRolesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CONTACT_ROLES, $parameters);
    }

    public function contactRolesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONTACT_ROLES, $parameters);
    }

    public function contactRolesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONTACT_ROLES, $parameters);
    }

    public function contactRolesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONTACT_ROLES, $parameters);
    }

    public function contactRolesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONTACT_ROLES, $parameters, $id);
    }

    public function contactRolesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONTACT_ROLES, $parameters, $id);
    }

    public function contactRolesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONTACT_ROLES, $parameters, $id);
    }

    public function contactRolesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONTACT_ROLES, $parameters, $id);
    }
    #endregion contactRoles

    #region contacts
    public function contacts(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONTACTS, $parameters);
    }

    public function contactsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CONTACTS, $parameters);
    }

    public function contactsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONTACTS, $parameters);
    }

    public function contactsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONTACTS, $parameters);
    }

    public function contactsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONTACTS, $parameters);
    }

    public function contactsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONTACTS, $parameters, $id);
    }

    public function contactsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONTACTS, $parameters, $id);
    }

    public function contactsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONTACTS, $parameters, $id);
    }

    public function contactsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONTACTS, $parameters, $id);
    }
    #endregion contacts

    #region tenantGroups
    public function tenantGroups(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TENANT_GROUPS, $parameters);
    }

    public function tenantGroupsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::TENANT_GROUPS, $parameters);
    }

    public function tenantGroupsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TENANT_GROUPS, $parameters);
    }

    public function tenantGroupsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TENANT_GROUPS, $parameters);
    }

    public function tenantGroupsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TENANT_GROUPS, $parameters);
    }

    public function tenantGroupsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TENANT_GROUPS, $parameters, $id);
    }

    public function tenantGroupsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TENANT_GROUPS, $parameters, $id);
    }

    public function tenantGroupsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TENANT_GROUPS, $parameters, $id);
    }

    public function tenantGroupsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TENANT_GROUPS, $parameters, $id);
    }
    #endregion tenantGroups

    #region tenants
    public function tenants(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TENANTS, $parameters);
    }

    public function tenantsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::TENANTS, $parameters);
    }

    public function tenantsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TENANTS, $parameters);
    }

    public function tenantsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TENANTS, $parameters);
    }

    public function tenantsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TENANTS, $parameters);
    }

    public function tenantsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TENANTS, $parameters, $id);
    }

    public function tenantsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TENANTS, $parameters, $id);
    }

    public function tenantsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TENANTS, $parameters, $id);
    }

    public function tenantsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TENANTS, $parameters, $id);
    }
    #endregion tenants
}