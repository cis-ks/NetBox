<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxUsers extends NetBoxApiAbstract
{
    private const string CONFIG = 'users/config';
    private const string GROUPS = 'users/groups';
    private const string PERMISSIONS = 'users/permissions';
    private const string TOKENS = 'users/tokens';
    private const string USERS = 'users/users';

    #region config
    public function config(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONFIG, $parameters);
    }
    #endregion config

    #region groups
    public function groups(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::GROUPS, $parameters);
    }

    public function groupsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::GROUPS, $parameters);
    }

    public function groupsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::GROUPS, $parameters);
    }

    public function groupsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::GROUPS, $parameters);
    }

    public function groupsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::GROUPS, $parameters);
    }

    public function groupsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::GROUPS, ['id' => $id, ...$parameters]);
    }

    public function groupsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::GROUPS, ['id' => $id, ...$parameters]);
    }

    public function groupsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::GROUPS, ['id' => $id, ...$parameters]);
    }

    public function groupsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::GROUPS, ['id' => $id, ...$parameters]);
    }
    #endregion groups

    #region permissions
    public function permissions(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PERMISSIONS, $parameters);
    }

    public function permissionsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::PERMISSIONS, $parameters);
    }

    public function permissionsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::PERMISSIONS, $parameters);
    }

    public function permissionsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::PERMISSIONS, $parameters);
    }

    public function permissionsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::PERMISSIONS, $parameters);
    }

    public function permissionsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PERMISSIONS, ['id' => $id, ...$parameters]);
    }

    public function permissionsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::PERMISSIONS, ['id' => $id, ...$parameters]);
    }

    public function permissionsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::PERMISSIONS, ['id' => $id, ...$parameters]);
    }

    public function permissionsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::PERMISSIONS, ['id' => $id, ...$parameters]);
    }
    #endregion permissions

    #region tokens
    public function tokens(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TOKENS, $parameters);
    }

    public function tokensCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::TOKENS, $parameters);
    }

    public function tokensPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TOKENS, $parameters);
    }

    public function tokensPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TOKENS, $parameters);
    }

    public function tokensDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TOKENS, $parameters);
    }

    public function tokensById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TOKENS, ['id' => $id, ...$parameters]);
    }

    public function tokensByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TOKENS, ['id' => $id, ...$parameters]);
    }

    public function tokensByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TOKENS, ['id' => $id, ...$parameters]);
    }

    public function tokensByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TOKENS, ['id' => $id, ...$parameters]);
    }
    #endregion tokens

    #region users
    public function users(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::USERS, $parameters);
    }

    public function usersCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::USERS, $parameters);
    }

    public function usersPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::USERS, $parameters);
    }

    public function usersPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::USERS, $parameters);
    }

    public function usersDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::USERS, $parameters);
    }

    public function usersById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::USERS, ['id' => $id, ...$parameters]);
    }

    public function usersByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::USERS, ['id' => $id, ...$parameters]);
    }

    public function usersByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::USERS, ['id' => $id, ...$parameters]);
    }

    public function usersByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::USERS, ['id' => $id, ...$parameters]);
    }
    #endregion users
}