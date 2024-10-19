<?php

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxApi;
use Cis\NetBox\NetBoxResult;


class NetBoxTenancy
{
    private const string CONTACT_ASSIGNMENTS = 'tenancy/contact-assignments';
    private const string CONTACT_GROUPS = 'tenancy/contact-groups';
    private const string CONTACT_ROLES = 'tenancy/contact-roles';
    private const string CONTACTS = 'tenancy/contacts';
    private const string TENANT_GROUPS = 'tenancy/tenant-groups';
    private const string TENANTS = 'tenancy/tenants';

    public function __construct(
        private readonly NetBoxApi $api,
    ) {}

    #region contactAssignments
    public function contactAssignments(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONTACT_ASSIGNMENTS, $parameters);
    }

    public function contactAssignmentsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CONTACT_ASSIGNMENTS, $parameters);
    }

    public function contactAssignmentsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONTACT_ASSIGNMENTS, $parameters);
    }

    public function contactAssignmentsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONTACT_ASSIGNMENTS, $parameters);
    }

    public function contactAssignmentsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONTACT_ASSIGNMENTS, $parameters);
    }

    public function contactAssignmentsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONTACT_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }

    public function contactAssignmentsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONTACT_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }

    public function contactAssignmentsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONTACT_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }

    public function contactAssignmentsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONTACT_ASSIGNMENTS, ['id' => $id, ...$parameters]);
    }
    #endregion contactAssignments

    #region contactGroups
    public function contactGroups(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONTACT_GROUPS, $parameters);
    }

    public function contactGroupsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CONTACT_GROUPS, $parameters);
    }

    public function contactGroupsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONTACT_GROUPS, $parameters);
    }

    public function contactGroupsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONTACT_GROUPS, $parameters);
    }

    public function contactGroupsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONTACT_GROUPS, $parameters);
    }

    public function contactGroupsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONTACT_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function contactGroupsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONTACT_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function contactGroupsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONTACT_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function contactGroupsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONTACT_GROUPS, ['id' => $id, ...$parameters]);
    }
    #endregion contactGroups

    #region contactRoles
    public function contactRoles(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONTACT_ROLES, $parameters);
    }

    public function contactRolesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CONTACT_ROLES, $parameters);
    }

    public function contactRolesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONTACT_ROLES, $parameters);
    }

    public function contactRolesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONTACT_ROLES, $parameters);
    }

    public function contactRolesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONTACT_ROLES, $parameters);
    }

    public function contactRolesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONTACT_ROLES, ['id' => $id, ...$parameters]);
    }

    public function contactRolesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONTACT_ROLES, ['id' => $id, ...$parameters]);
    }

    public function contactRolesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONTACT_ROLES, ['id' => $id, ...$parameters]);
    }

    public function contactRolesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONTACT_ROLES, ['id' => $id, ...$parameters]);
    }
    #endregion contactRoles

    #region contacts
    public function contacts(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONTACTS, $parameters);
    }

    public function contactsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CONTACTS, $parameters);
    }

    public function contactsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONTACTS, $parameters);
    }

    public function contactsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONTACTS, $parameters);
    }

    public function contactsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONTACTS, $parameters);
    }

    public function contactsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONTACTS, ['id' => $id, ...$parameters]);
    }

    public function contactsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONTACTS, ['id' => $id, ...$parameters]);
    }

    public function contactsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONTACTS, ['id' => $id, ...$parameters]);
    }

    public function contactsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONTACTS, ['id' => $id, ...$parameters]);
    }
    #endregion contacts

    #region tenantGroups
    public function tenantGroups(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TENANT_GROUPS, $parameters);
    }

    public function tenantGroupsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::TENANT_GROUPS, $parameters);
    }

    public function tenantGroupsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TENANT_GROUPS, $parameters);
    }

    public function tenantGroupsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TENANT_GROUPS, $parameters);
    }

    public function tenantGroupsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TENANT_GROUPS, $parameters);
    }

    public function tenantGroupsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TENANT_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function tenantGroupsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TENANT_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function tenantGroupsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TENANT_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function tenantGroupsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TENANT_GROUPS, ['id' => $id, ...$parameters]);
    }
    #endregion tenantGroups

    #region tenants
    public function tenants(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TENANTS, $parameters);
    }

    public function tenantsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::TENANTS, $parameters);
    }

    public function tenantsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TENANTS, $parameters);
    }

    public function tenantsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TENANTS, $parameters);
    }

    public function tenantsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TENANTS, $parameters);
    }

    public function tenantsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TENANTS, ['id' => $id, ...$parameters]);
    }

    public function tenantsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TENANTS, ['id' => $id, ...$parameters]);
    }

    public function tenantsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TENANTS, ['id' => $id, ...$parameters]);
    }

    public function tenantsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TENANTS, ['id' => $id, ...$parameters]);
    }
    #endregion tenants
}