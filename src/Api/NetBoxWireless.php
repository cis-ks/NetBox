<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxWireless extends NetBoxApiAbstract
{
    private const string WIRELESS_LAN_GROUPS = 'wireless/wireless-lan-groups';
    private const string WIRELESS_LANS = 'wireless/wireless-lans';
    private const string WIRELESS_LINKS = 'wireless/wireless-links';

    #region wirelessLanGroups
    public function wirelessLanGroups(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::WIRELESS_LAN_GROUPS, $parameters);
    }

    public function wirelessLanGroupsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::WIRELESS_LAN_GROUPS, $parameters);
    }

    public function wirelessLanGroupsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::WIRELESS_LAN_GROUPS, $parameters);
    }

    public function wirelessLanGroupsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::WIRELESS_LAN_GROUPS, $parameters);
    }

    public function wirelessLanGroupsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::WIRELESS_LAN_GROUPS, $parameters);
    }

    public function wirelessLanGroupsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::WIRELESS_LAN_GROUPS, $parameters, $id);
    }

    public function wirelessLanGroupsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::WIRELESS_LAN_GROUPS, $parameters, $id);
    }

    public function wirelessLanGroupsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::WIRELESS_LAN_GROUPS, $parameters, $id);
    }

    public function wirelessLanGroupsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::WIRELESS_LAN_GROUPS, $parameters, $id);
    }
    #endregion wirelessLanGroups

    #region wirelessLans
    public function wirelessLans(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::WIRELESS_LANS, $parameters);
    }

    public function wirelessLansCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::WIRELESS_LANS, $parameters);
    }

    public function wirelessLansPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::WIRELESS_LANS, $parameters);
    }

    public function wirelessLansPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::WIRELESS_LANS, $parameters);
    }

    public function wirelessLansDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::WIRELESS_LANS, $parameters);
    }

    public function wirelessLansById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::WIRELESS_LANS, $parameters, $id);
    }

    public function wirelessLansByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::WIRELESS_LANS, $parameters, $id);
    }

    public function wirelessLansByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::WIRELESS_LANS, $parameters, $id);
    }

    public function wirelessLansByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::WIRELESS_LANS, $parameters, $id);
    }
    #endregion wirelessLans

    #region wirelessLinks
    public function wirelessLinks(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::WIRELESS_LINKS, $parameters);
    }

    public function wirelessLinksCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::WIRELESS_LINKS, $parameters);
    }

    public function wirelessLinksPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::WIRELESS_LINKS, $parameters);
    }

    public function wirelessLinksPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::WIRELESS_LINKS, $parameters);
    }

    public function wirelessLinksDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::WIRELESS_LINKS, $parameters);
    }

    public function wirelessLinksById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::WIRELESS_LINKS, $parameters, $id);
    }

    public function wirelessLinksByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::WIRELESS_LINKS, $parameters, $id);
    }

    public function wirelessLinksByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::WIRELESS_LINKS, $parameters, $id);
    }

    public function wirelessLinksByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::WIRELESS_LINKS, $parameters, $id);
    }
    #endregion wirelessLinks
}