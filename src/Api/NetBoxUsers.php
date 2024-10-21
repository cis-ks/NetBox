<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxUsers extends NetBoxApiAbstract
{
    private const string CONFIG = 'users/config';
    private const string GROUPS = 'users/groups';
    private const string OWNER_GROUPS = 'users/owner-groups';
    private const string OWNERS = 'users/owners';
    private const string PERMISSIONS = 'users/permissions';
    private const string TOKENS = 'users/tokens';
    private const string USERS = 'users/users';

    #region config
    public function config(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONFIG, $parameters);
    }
    #endregion config

    #region groups
    public function groups(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::GROUPS, $parameters);
    }

    public function groupsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::GROUPS, $parameters);
    }

    public function groupsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::GROUPS, $parameters);
    }

    public function groupsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::GROUPS, $parameters);
    }

    public function groupsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::GROUPS, $parameters);
    }

    public function groupsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::GROUPS, $parameters, $id);
    }

    public function groupsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::GROUPS, $parameters, $id);
    }

    public function groupsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::GROUPS, $parameters, $id);
    }

    public function groupsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::GROUPS, $parameters, $id);
    }
    #endregion groups

    #region ownerGroups
    public function ownerGroups(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::OWNER_GROUPS, $parameters);
    }

    public function ownerGroupsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::OWNER_GROUPS, $parameters);
    }

    public function ownerGroupsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::OWNER_GROUPS, $parameters);
    }

    public function ownerGroupsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::OWNER_GROUPS, $parameters);
    }

    public function ownerGroupsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::OWNER_GROUPS, $parameters);
    }

    public function ownerGroupsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::OWNER_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function ownerGroupsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::OWNER_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function ownerGroupsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::OWNER_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function ownerGroupsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::OWNER_GROUPS, ['id' => $id, ...$parameters]);
    }
    #endregion ownerGroups

    #region owners
    public function owners(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::OWNERS, $parameters);
    }

    public function ownersCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::OWNERS, $parameters);
    }

    public function ownersPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::OWNERS, $parameters);
    }

    public function ownersPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::OWNERS, $parameters);
    }

    public function ownersDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::OWNERS, $parameters);
    }

    public function ownersById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::OWNERS, ['id' => $id, ...$parameters]);
    }

    public function ownersByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::OWNERS, ['id' => $id, ...$parameters]);
    }

    public function ownersByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::OWNERS, ['id' => $id, ...$parameters]);
    }

    public function ownersByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::OWNERS, ['id' => $id, ...$parameters]);
    }
    #endregion owners

    #region permissions
    public function permissions(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PERMISSIONS, $parameters);
    }

    public function permissionsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::PERMISSIONS, $parameters);
    }

    public function permissionsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::PERMISSIONS, $parameters);
    }

    public function permissionsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::PERMISSIONS, $parameters);
    }

    public function permissionsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::PERMISSIONS, $parameters);
    }

    public function permissionsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PERMISSIONS, $parameters, $id);
    }

    public function permissionsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::PERMISSIONS, $parameters, $id);
    }

    public function permissionsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::PERMISSIONS, $parameters, $id);
    }

    public function permissionsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::PERMISSIONS, $parameters, $id);
    }
    #endregion permissions

    #region tokens
    public function tokens(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TOKENS, $parameters);
    }

    public function tokensCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::TOKENS, $parameters);
    }

    public function tokensPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TOKENS, $parameters);
    }

    public function tokensPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TOKENS, $parameters);
    }

    public function tokensDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TOKENS, $parameters);
    }

    public function tokensById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TOKENS, $parameters, $id);
    }

    public function tokensByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TOKENS, $parameters, $id);
    }

    public function tokensByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TOKENS, $parameters, $id);
    }

    public function tokensByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TOKENS, $parameters, $id);
    }
    #endregion tokens

    #region users
    public function users(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::USERS, $parameters);
    }

    public function usersCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::USERS, $parameters);
    }

    public function usersPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::USERS, $parameters);
    }

    public function usersPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::USERS, $parameters);
    }

    public function usersDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::USERS, $parameters);
    }

    public function usersById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::USERS, $parameters, $id);
    }

    public function usersByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::USERS, $parameters, $id);
    }

    public function usersByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::USERS, $parameters, $id);
    }

    public function usersByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::USERS, $parameters, $id);
    }
    #endregion users
}
