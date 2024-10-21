<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxWireless extends NetBoxApiAbstract
{
    private const string WIRELESS_LAN_GROUPS = 'wireless/wireless-lan-groups';
    private const string WIRELESS_LANS = 'wireless/wireless-lans';
    private const string WIRELESS_LINKS = 'wireless/wireless-links';

    #region wirelessLanGroups
    public function wirelessLanGroups(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::WIRELESS_LAN_GROUPS, $parameters);
    }

    public function wirelessLanGroupsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::WIRELESS_LAN_GROUPS, $parameters);
    }

    public function wirelessLanGroupsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::WIRELESS_LAN_GROUPS, $parameters);
    }

    public function wirelessLanGroupsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::WIRELESS_LAN_GROUPS, $parameters);
    }

    public function wirelessLanGroupsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::WIRELESS_LAN_GROUPS, $parameters);
    }

    public function wirelessLanGroupsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::WIRELESS_LAN_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function wirelessLanGroupsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::WIRELESS_LAN_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function wirelessLanGroupsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::WIRELESS_LAN_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function wirelessLanGroupsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::WIRELESS_LAN_GROUPS, ['id' => $id, ...$parameters]);
    }
    #endregion wirelessLanGroups

    #region wirelessLans
    public function wirelessLans(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::WIRELESS_LANS, $parameters);
    }

    public function wirelessLansCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::WIRELESS_LANS, $parameters);
    }

    public function wirelessLansPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::WIRELESS_LANS, $parameters);
    }

    public function wirelessLansPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::WIRELESS_LANS, $parameters);
    }

    public function wirelessLansDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::WIRELESS_LANS, $parameters);
    }

    public function wirelessLansById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::WIRELESS_LANS, ['id' => $id, ...$parameters]);
    }

    public function wirelessLansByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::WIRELESS_LANS, ['id' => $id, ...$parameters]);
    }

    public function wirelessLansByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::WIRELESS_LANS, ['id' => $id, ...$parameters]);
    }

    public function wirelessLansByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::WIRELESS_LANS, ['id' => $id, ...$parameters]);
    }
    #endregion wirelessLans

    #region wirelessLinks
    public function wirelessLinks(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::WIRELESS_LINKS, $parameters);
    }

    public function wirelessLinksCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::WIRELESS_LINKS, $parameters);
    }

    public function wirelessLinksPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::WIRELESS_LINKS, $parameters);
    }

    public function wirelessLinksPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::WIRELESS_LINKS, $parameters);
    }

    public function wirelessLinksDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::WIRELESS_LINKS, $parameters);
    }

    public function wirelessLinksById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::WIRELESS_LINKS, ['id' => $id, ...$parameters]);
    }

    public function wirelessLinksByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::WIRELESS_LINKS, ['id' => $id, ...$parameters]);
    }

    public function wirelessLinksByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::WIRELESS_LINKS, ['id' => $id, ...$parameters]);
    }

    public function wirelessLinksByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::WIRELESS_LINKS, ['id' => $id, ...$parameters]);
    }
    #endregion wirelessLinks
}