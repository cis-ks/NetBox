<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxDcim extends NetBoxApiAbstract
{
    private const string CABLE_TERMINATIONS = 'dcim/cable-terminations';
    private const string CABLES = 'dcim/cables';
    private const string CONNECTED_DEVICE = 'dcim/connected-device';
    private const string CONSOLE_PORT_TEMPLATES = 'dcim/console-port-templates';
    private const string CONSOLE_PORTS = 'dcim/console-ports';
    private const string CONSOLE_SERVER_PORT_TEMPLATES = 'dcim/console-server-port-templates';
    private const string CONSOLE_SERVER_PORTS = 'dcim/console-server-ports';
    private const string DEVICE_BAY_TEMPLATES = 'dcim/device-bay-templates';
    private const string DEVICE_BAYS = 'dcim/device-bays';
    private const string DEVICE_ROLES = 'dcim/device-roles';
    private const string DEVICE_TYPES = 'dcim/device-types';
    private const string DEVICES = 'dcim/devices';
    private const string FRONT_PORT_TEMPLATES = 'dcim/front-port-templates';
    private const string FRONT_PORTS = 'dcim/front-ports';
    private const string INTERFACE_TEMPLATES = 'dcim/interface-templates';
    private const string INTERFACES = 'dcim/interfaces';
    private const string INVENTORY_ITEM_ROLES = 'dcim/inventory-item-roles';
    private const string INVENTORY_ITEM_TEMPLATES = 'dcim/inventory-item-templates';
    private const string INVENTORY_ITEMS = 'dcim/inventory-items';
    private const string LOCATIONS = 'dcim/locations';
    private const string MANUFACTURERS = 'dcim/manufacturers';
    private const string MODULE_BAY_TEMPLATES = 'dcim/module-bay-templates';
    private const string MODULE_BAYS = 'dcim/module-bays';
    private const string MODULE_TYPES = 'dcim/module-types';
    private const string MODULES = 'dcim/modules';
    private const string PLATFORMS = 'dcim/platforms';
    private const string POWER_FEEDS = 'dcim/power-feeds';
    private const string POWER_OUTLET_TEMPLATES = 'dcim/power-outlet-templates';
    private const string POWER_OUTLETS = 'dcim/power-outlets';
    private const string POWER_PANELS = 'dcim/power-panels';
    private const string POWER_PORT_TEMPLATES = 'dcim/power-port-templates';
    private const string POWER_PORTS = 'dcim/power-ports';
    private const string RACK_RESERVATIONS = 'dcim/rack-reservations';
    private const string RACK_ROLES = 'dcim/rack-roles';
    private const string RACK_TYPES = 'dcim/rack-types';
    private const string RACKS = 'dcim/racks';
    private const string REAR_PORT_TEMPLATES = 'dcim/rear-port-templates';
    private const string REAR_PORTS = 'dcim/rear-ports';
    private const string REGIONS = 'dcim/regions';
    private const string SITE_GROUPS = 'dcim/site-groups';
    private const string SITES = 'dcim/sites';
    private const string VIRTUAL_CHASSIS = 'dcim/virtual-chassis';
    private const string VIRTUAL_DEVICE_CONTEXTS = 'dcim/virtual-device-contexts';

    #region cableTerminations
    public function cableTerminations(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CABLE_TERMINATIONS, $parameters);
    }

    public function cableTerminationsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CABLE_TERMINATIONS, $parameters);
    }

    public function cableTerminationsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CABLE_TERMINATIONS, $parameters);
    }

    public function cableTerminationsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CABLE_TERMINATIONS, $parameters);
    }

    public function cableTerminationsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CABLE_TERMINATIONS, $parameters);
    }

    public function cableTerminationsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CABLE_TERMINATIONS, $parameters, $id);
    }

    public function cableTerminationsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CABLE_TERMINATIONS, $parameters, $id);
    }

    public function cableTerminationsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CABLE_TERMINATIONS, $parameters, $id);
    }

    public function cableTerminationsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CABLE_TERMINATIONS, $parameters, $id);
    }
    #endregion cableTerminations

    #region cables
    public function cables(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CABLES, $parameters);
    }

    public function cablesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CABLES, $parameters);
    }

    public function cablesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CABLES, $parameters);
    }

    public function cablesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CABLES, $parameters);
    }

    public function cablesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CABLES, $parameters);
    }

    public function cablesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CABLES, $parameters, $id);
    }

    public function cablesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CABLES, $parameters, $id);
    }

    public function cablesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CABLES, $parameters, $id);
    }

    public function cablesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CABLES, $parameters, $id);
    }
    #endregion cables

    #region connectedDevice
    public function connectedDevice(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONNECTED_DEVICE, $parameters);
    }
    #endregion connectedDevice

    #region consolePortTemplates
    public function consolePortTemplates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONSOLE_PORT_TEMPLATES, $parameters);
    }

    public function consolePortTemplatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CONSOLE_PORT_TEMPLATES, $parameters);
    }

    public function consolePortTemplatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONSOLE_PORT_TEMPLATES, $parameters);
    }

    public function consolePortTemplatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONSOLE_PORT_TEMPLATES, $parameters);
    }

    public function consolePortTemplatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONSOLE_PORT_TEMPLATES, $parameters);
    }

    public function consolePortTemplatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONSOLE_PORT_TEMPLATES, $parameters, $id);
    }

    public function consolePortTemplatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONSOLE_PORT_TEMPLATES, $parameters, $id);
    }

    public function consolePortTemplatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONSOLE_PORT_TEMPLATES, $parameters, $id);
    }

    public function consolePortTemplatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONSOLE_PORT_TEMPLATES, $parameters, $id);
    }
    #endregion consolePortTemplates

    #region consolePorts
    public function consolePorts(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONSOLE_PORTS, $parameters);
    }

    public function consolePortsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CONSOLE_PORTS, $parameters);
    }

    public function consolePortsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONSOLE_PORTS, $parameters);
    }

    public function consolePortsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONSOLE_PORTS, $parameters);
    }

    public function consolePortsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONSOLE_PORTS, $parameters);
    }

    public function consolePortsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONSOLE_PORTS, $parameters, $id);
    }

    public function consolePortsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONSOLE_PORTS, $parameters, $id);
    }

    public function consolePortsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONSOLE_PORTS, $parameters, $id);
    }

    public function consolePortsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONSOLE_PORTS, $parameters, $id);
    }

    public function consolePortsByIdTrace(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONSOLE_PORTS, $parameters, $id, 'trace');
    }
    #endregion consolePorts

    #region consoleServerPortTemplates
    public function consoleServerPortTemplates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters);
    }

    public function consoleServerPortTemplatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters);
    }

    public function consoleServerPortTemplatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters);
    }

    public function consoleServerPortTemplatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters);
    }

    public function consoleServerPortTemplatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters);
    }

    public function consoleServerPortTemplatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters, $id);
    }

    public function consoleServerPortTemplatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters, $id);
    }

    public function consoleServerPortTemplatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters, $id);
    }

    public function consoleServerPortTemplatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters, $id);
    }
    #endregion consoleServerPortTemplates

    #region consoleServerPorts
    public function consoleServerPorts(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONSOLE_SERVER_PORTS, $parameters);
    }

    public function consoleServerPortsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::CONSOLE_SERVER_PORTS, $parameters);
    }

    public function consoleServerPortsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONSOLE_SERVER_PORTS, $parameters);
    }

    public function consoleServerPortsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONSOLE_SERVER_PORTS, $parameters);
    }

    public function consoleServerPortsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONSOLE_SERVER_PORTS, $parameters);
    }

    public function consoleServerPortsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONSOLE_SERVER_PORTS, $parameters, $id);
    }

    public function consoleServerPortsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::CONSOLE_SERVER_PORTS, $parameters, $id);
    }

    public function consoleServerPortsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::CONSOLE_SERVER_PORTS, $parameters, $id);
    }

    public function consoleServerPortsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::CONSOLE_SERVER_PORTS, $parameters, $id);
    }

    public function consoleServerPortsByIdTrace(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::CONSOLE_SERVER_PORTS, $parameters, $id, 'trace');
    }
    #endregion consoleServerPorts

    #region deviceBayTemplates
    public function deviceBayTemplates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DEVICE_BAY_TEMPLATES, $parameters);
    }

    public function deviceBayTemplatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::DEVICE_BAY_TEMPLATES, $parameters);
    }

    public function deviceBayTemplatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::DEVICE_BAY_TEMPLATES, $parameters);
    }

    public function deviceBayTemplatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::DEVICE_BAY_TEMPLATES, $parameters);
    }

    public function deviceBayTemplatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::DEVICE_BAY_TEMPLATES, $parameters);
    }

    public function deviceBayTemplatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DEVICE_BAY_TEMPLATES, $parameters, $id);
    }

    public function deviceBayTemplatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::DEVICE_BAY_TEMPLATES, $parameters, $id);
    }

    public function deviceBayTemplatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::DEVICE_BAY_TEMPLATES, $parameters, $id);
    }

    public function deviceBayTemplatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::DEVICE_BAY_TEMPLATES, $parameters, $id);
    }
    #endregion deviceBayTemplates

    #region deviceBays
    public function deviceBays(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DEVICE_BAYS, $parameters);
    }

    public function deviceBaysCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::DEVICE_BAYS, $parameters);
    }

    public function deviceBaysPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::DEVICE_BAYS, $parameters);
    }

    public function deviceBaysPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::DEVICE_BAYS, $parameters);
    }

    public function deviceBaysDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::DEVICE_BAYS, $parameters);
    }

    public function deviceBaysById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DEVICE_BAYS, $parameters, $id);
    }

    public function deviceBaysByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::DEVICE_BAYS, $parameters, $id);
    }

    public function deviceBaysByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::DEVICE_BAYS, $parameters, $id);
    }

    public function deviceBaysByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::DEVICE_BAYS, $parameters, $id);
    }
    #endregion deviceBays

    #region deviceRoles
    public function deviceRoles(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DEVICE_ROLES, $parameters);
    }

    public function deviceRolesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::DEVICE_ROLES, $parameters);
    }

    public function deviceRolesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::DEVICE_ROLES, $parameters);
    }

    public function deviceRolesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::DEVICE_ROLES, $parameters);
    }

    public function deviceRolesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::DEVICE_ROLES, $parameters);
    }

    public function deviceRolesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DEVICE_ROLES, $parameters, $id);
    }

    public function deviceRolesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::DEVICE_ROLES, $parameters, $id);
    }

    public function deviceRolesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::DEVICE_ROLES, $parameters, $id);
    }

    public function deviceRolesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::DEVICE_ROLES, $parameters, $id);
    }
    #endregion deviceRoles

    #region deviceTypes
    public function deviceTypes(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DEVICE_TYPES, $parameters);
    }

    public function deviceTypesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::DEVICE_TYPES, $parameters);
    }

    public function deviceTypesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::DEVICE_TYPES, $parameters);
    }

    public function deviceTypesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::DEVICE_TYPES, $parameters);
    }

    public function deviceTypesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::DEVICE_TYPES, $parameters);
    }

    public function deviceTypesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DEVICE_TYPES, $parameters, $id);
    }

    public function deviceTypesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::DEVICE_TYPES, $parameters, $id);
    }

    public function deviceTypesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::DEVICE_TYPES, $parameters, $id);
    }

    public function deviceTypesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::DEVICE_TYPES, $parameters, $id);
    }
    #endregion deviceTypes

    #region devices
    public function devices(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DEVICES, $parameters);
    }

    public function devicesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::DEVICES, $parameters);
    }

    public function devicesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::DEVICES, $parameters);
    }

    public function devicesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::DEVICES, $parameters);
    }

    public function devicesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::DEVICES, $parameters);
    }

    public function devicesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DEVICES, $parameters, $id);
    }

    public function devicesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::DEVICES, $parameters, $id);
    }

    public function devicesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::DEVICES, $parameters, $id);
    }

    public function devicesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::DEVICES, $parameters, $id);
    }

    public function devicesByIdRenderConfig(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::DEVICES, $parameters, $id, 'render-config');
    }
    #endregion devices

    #region frontPortTemplates
    public function frontPortTemplates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::FRONT_PORT_TEMPLATES, $parameters);
    }

    public function frontPortTemplatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::FRONT_PORT_TEMPLATES, $parameters);
    }

    public function frontPortTemplatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::FRONT_PORT_TEMPLATES, $parameters);
    }

    public function frontPortTemplatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::FRONT_PORT_TEMPLATES, $parameters);
    }

    public function frontPortTemplatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::FRONT_PORT_TEMPLATES, $parameters);
    }

    public function frontPortTemplatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::FRONT_PORT_TEMPLATES, $parameters, $id);
    }

    public function frontPortTemplatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::FRONT_PORT_TEMPLATES, $parameters, $id);
    }

    public function frontPortTemplatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::FRONT_PORT_TEMPLATES, $parameters, $id);
    }

    public function frontPortTemplatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::FRONT_PORT_TEMPLATES, $parameters, $id);
    }
    #endregion frontPortTemplates

    #region frontPorts
    public function frontPorts(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::FRONT_PORTS, $parameters);
    }

    public function frontPortsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::FRONT_PORTS, $parameters);
    }

    public function frontPortsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::FRONT_PORTS, $parameters);
    }

    public function frontPortsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::FRONT_PORTS, $parameters);
    }

    public function frontPortsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::FRONT_PORTS, $parameters);
    }

    public function frontPortsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::FRONT_PORTS, $parameters, $id);
    }

    public function frontPortsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::FRONT_PORTS, $parameters, $id);
    }

    public function frontPortsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::FRONT_PORTS, $parameters, $id);
    }

    public function frontPortsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::FRONT_PORTS, $parameters, $id);
    }

    public function frontPortsByIdPaths(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::FRONT_PORTS, $parameters, $id, 'paths');
    }
    #endregion frontPorts

    #region interfaceTemplates
    public function interfaceTemplates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::INTERFACE_TEMPLATES, $parameters);
    }

    public function interfaceTemplatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::INTERFACE_TEMPLATES, $parameters);
    }

    public function interfaceTemplatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::INTERFACE_TEMPLATES, $parameters);
    }

    public function interfaceTemplatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::INTERFACE_TEMPLATES, $parameters);
    }

    public function interfaceTemplatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::INTERFACE_TEMPLATES, $parameters);
    }

    public function interfaceTemplatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::INTERFACE_TEMPLATES, $parameters, $id);
    }

    public function interfaceTemplatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::INTERFACE_TEMPLATES, $parameters, $id);
    }

    public function interfaceTemplatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::INTERFACE_TEMPLATES, $parameters, $id);
    }

    public function interfaceTemplatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::INTERFACE_TEMPLATES, $parameters, $id);
    }
    #endregion interfaceTemplates

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

    public function interfacesByIdTrace(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::INTERFACES, $parameters, $id, 'trace');
    }
    #endregion interfaces

    #region inventoryItemRoles
    public function inventoryItemRoles(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::INVENTORY_ITEM_ROLES, $parameters);
    }

    public function inventoryItemRolesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::INVENTORY_ITEM_ROLES, $parameters);
    }

    public function inventoryItemRolesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::INVENTORY_ITEM_ROLES, $parameters);
    }

    public function inventoryItemRolesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::INVENTORY_ITEM_ROLES, $parameters);
    }

    public function inventoryItemRolesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::INVENTORY_ITEM_ROLES, $parameters);
    }

    public function inventoryItemRolesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::INVENTORY_ITEM_ROLES, $parameters, $id);
    }

    public function inventoryItemRolesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::INVENTORY_ITEM_ROLES, $parameters, $id);
    }

    public function inventoryItemRolesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::INVENTORY_ITEM_ROLES, $parameters, $id);
    }

    public function inventoryItemRolesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::INVENTORY_ITEM_ROLES, $parameters, $id);
    }
    #endregion inventoryItemRoles

    #region inventoryItemTemplates
    public function inventoryItemTemplates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::INVENTORY_ITEM_TEMPLATES, $parameters);
    }

    public function inventoryItemTemplatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::INVENTORY_ITEM_TEMPLATES, $parameters);
    }

    public function inventoryItemTemplatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::INVENTORY_ITEM_TEMPLATES, $parameters);
    }

    public function inventoryItemTemplatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::INVENTORY_ITEM_TEMPLATES, $parameters);
    }

    public function inventoryItemTemplatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::INVENTORY_ITEM_TEMPLATES, $parameters);
    }

    public function inventoryItemTemplatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::INVENTORY_ITEM_TEMPLATES, $parameters, $id);
    }

    public function inventoryItemTemplatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::INVENTORY_ITEM_TEMPLATES, $parameters, $id);
    }

    public function inventoryItemTemplatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::INVENTORY_ITEM_TEMPLATES, $parameters, $id);
    }

    public function inventoryItemTemplatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::INVENTORY_ITEM_TEMPLATES, $parameters, $id);
    }
    #endregion inventoryItemTemplates

    #region inventoryItems
    public function inventoryItems(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::INVENTORY_ITEMS, $parameters);
    }

    public function inventoryItemsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::INVENTORY_ITEMS, $parameters);
    }

    public function inventoryItemsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::INVENTORY_ITEMS, $parameters);
    }

    public function inventoryItemsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::INVENTORY_ITEMS, $parameters);
    }

    public function inventoryItemsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::INVENTORY_ITEMS, $parameters);
    }

    public function inventoryItemsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::INVENTORY_ITEMS, $parameters, $id);
    }

    public function inventoryItemsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::INVENTORY_ITEMS, $parameters, $id);
    }

    public function inventoryItemsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::INVENTORY_ITEMS, $parameters, $id);
    }

    public function inventoryItemsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::INVENTORY_ITEMS, $parameters, $id);
    }
    #endregion inventoryItems

    #region locations
    public function locations(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::LOCATIONS, $parameters);
    }

    public function locationsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::LOCATIONS, $parameters);
    }

    public function locationsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::LOCATIONS, $parameters);
    }

    public function locationsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::LOCATIONS, $parameters);
    }

    public function locationsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::LOCATIONS, $parameters);
    }

    public function locationsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::LOCATIONS, $parameters, $id);
    }

    public function locationsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::LOCATIONS, $parameters, $id);
    }

    public function locationsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::LOCATIONS, $parameters, $id);
    }

    public function locationsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::LOCATIONS, $parameters, $id);
    }
    #endregion locations

    #region manufacturers
    public function manufacturers(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::MANUFACTURERS, $parameters);
    }

    public function manufacturersCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::MANUFACTURERS, $parameters);
    }

    public function manufacturersPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::MANUFACTURERS, $parameters);
    }

    public function manufacturersPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::MANUFACTURERS, $parameters);
    }

    public function manufacturersDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::MANUFACTURERS, $parameters);
    }

    public function manufacturersById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::MANUFACTURERS, $parameters, $id);
    }

    public function manufacturersByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::MANUFACTURERS, $parameters, $id);
    }

    public function manufacturersByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::MANUFACTURERS, $parameters, $id);
    }

    public function manufacturersByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::MANUFACTURERS, $parameters, $id);
    }
    #endregion manufacturers

    #region moduleBayTemplates
    public function moduleBayTemplates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::MODULE_BAY_TEMPLATES, $parameters);
    }

    public function moduleBayTemplatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::MODULE_BAY_TEMPLATES, $parameters);
    }

    public function moduleBayTemplatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::MODULE_BAY_TEMPLATES, $parameters);
    }

    public function moduleBayTemplatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::MODULE_BAY_TEMPLATES, $parameters);
    }

    public function moduleBayTemplatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::MODULE_BAY_TEMPLATES, $parameters);
    }

    public function moduleBayTemplatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::MODULE_BAY_TEMPLATES, $parameters, $id);
    }

    public function moduleBayTemplatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::MODULE_BAY_TEMPLATES, $parameters, $id);
    }

    public function moduleBayTemplatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::MODULE_BAY_TEMPLATES, $parameters, $id);
    }

    public function moduleBayTemplatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::MODULE_BAY_TEMPLATES, $parameters, $id);
    }
    #endregion moduleBayTemplates

    #region moduleBays
    public function moduleBays(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::MODULE_BAYS, $parameters);
    }

    public function moduleBaysCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::MODULE_BAYS, $parameters);
    }

    public function moduleBaysPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::MODULE_BAYS, $parameters);
    }

    public function moduleBaysPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::MODULE_BAYS, $parameters);
    }

    public function moduleBaysDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::MODULE_BAYS, $parameters);
    }

    public function moduleBaysById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::MODULE_BAYS, $parameters, $id);
    }

    public function moduleBaysByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::MODULE_BAYS, $parameters, $id);
    }

    public function moduleBaysByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::MODULE_BAYS, $parameters, $id);
    }

    public function moduleBaysByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::MODULE_BAYS, $parameters, $id);
    }
    #endregion moduleBays

    #region moduleTypes
    public function moduleTypes(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::MODULE_TYPES, $parameters);
    }

    public function moduleTypesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::MODULE_TYPES, $parameters);
    }

    public function moduleTypesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::MODULE_TYPES, $parameters);
    }

    public function moduleTypesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::MODULE_TYPES, $parameters);
    }

    public function moduleTypesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::MODULE_TYPES, $parameters);
    }

    public function moduleTypesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::MODULE_TYPES, $parameters, $id);
    }

    public function moduleTypesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::MODULE_TYPES, $parameters, $id);
    }

    public function moduleTypesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::MODULE_TYPES, $parameters, $id);
    }

    public function moduleTypesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::MODULE_TYPES, $parameters, $id);
    }
    #endregion moduleTypes

    #region modules
    public function modules(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::MODULES, $parameters);
    }

    public function modulesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::MODULES, $parameters);
    }

    public function modulesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::MODULES, $parameters);
    }

    public function modulesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::MODULES, $parameters);
    }

    public function modulesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::MODULES, $parameters);
    }

    public function modulesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::MODULES, $parameters, $id);
    }

    public function modulesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::MODULES, $parameters, $id);
    }

    public function modulesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::MODULES, $parameters, $id);
    }

    public function modulesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::MODULES, $parameters, $id);
    }
    #endregion modules

    #region platforms
    public function platforms(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PLATFORMS, $parameters);
    }

    public function platformsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::PLATFORMS, $parameters);
    }

    public function platformsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::PLATFORMS, $parameters);
    }

    public function platformsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::PLATFORMS, $parameters);
    }

    public function platformsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::PLATFORMS, $parameters);
    }

    public function platformsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::PLATFORMS, $parameters, $id);
    }

    public function platformsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::PLATFORMS, $parameters, $id);
    }

    public function platformsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::PLATFORMS, $parameters, $id);
    }

    public function platformsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::PLATFORMS, $parameters, $id);
    }
    #endregion platforms

    #region powerFeeds
    public function powerFeeds(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_FEEDS, $parameters);
    }

    public function powerFeedsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::POWER_FEEDS, $parameters);
    }

    public function powerFeedsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::POWER_FEEDS, $parameters);
    }

    public function powerFeedsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::POWER_FEEDS, $parameters);
    }

    public function powerFeedsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::POWER_FEEDS, $parameters);
    }

    public function powerFeedsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_FEEDS, $parameters, $id);
    }

    public function powerFeedsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::POWER_FEEDS, $parameters, $id);
    }

    public function powerFeedsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::POWER_FEEDS, $parameters, $id);
    }

    public function powerFeedsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::POWER_FEEDS, $parameters, $id);
    }

    public function powerFeedsByIdTrace(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_FEEDS, $parameters, $id, 'trace');
    }
    #endregion powerFeeds

    #region powerOutletTemplates
    public function powerOutletTemplates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_OUTLET_TEMPLATES, $parameters);
    }

    public function powerOutletTemplatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::POWER_OUTLET_TEMPLATES, $parameters);
    }

    public function powerOutletTemplatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::POWER_OUTLET_TEMPLATES, $parameters);
    }

    public function powerOutletTemplatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::POWER_OUTLET_TEMPLATES, $parameters);
    }

    public function powerOutletTemplatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::POWER_OUTLET_TEMPLATES, $parameters);
    }

    public function powerOutletTemplatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_OUTLET_TEMPLATES, $parameters, $id);
    }

    public function powerOutletTemplatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::POWER_OUTLET_TEMPLATES, $parameters, $id);
    }

    public function powerOutletTemplatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::POWER_OUTLET_TEMPLATES, $parameters, $id);
    }

    public function powerOutletTemplatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::POWER_OUTLET_TEMPLATES, $parameters, $id);
    }
    #endregion powerOutletTemplates

    #region powerOutlets
    public function powerOutlets(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_OUTLETS, $parameters);
    }

    public function powerOutletsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::POWER_OUTLETS, $parameters);
    }

    public function powerOutletsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::POWER_OUTLETS, $parameters);
    }

    public function powerOutletsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::POWER_OUTLETS, $parameters);
    }

    public function powerOutletsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::POWER_OUTLETS, $parameters);
    }

    public function powerOutletsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_OUTLETS, $parameters, $id);
    }

    public function powerOutletsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::POWER_OUTLETS, $parameters, $id);
    }

    public function powerOutletsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::POWER_OUTLETS, $parameters, $id);
    }

    public function powerOutletsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::POWER_OUTLETS, $parameters, $id);
    }

    public function powerOutletsByIdTrace(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_OUTLETS, $parameters, $id, 'trace');
    }
    #endregion powerOutlets

    #region powerPanels
    public function powerPanels(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_PANELS, $parameters);
    }

    public function powerPanelsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::POWER_PANELS, $parameters);
    }

    public function powerPanelsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::POWER_PANELS, $parameters);
    }

    public function powerPanelsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::POWER_PANELS, $parameters);
    }

    public function powerPanelsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::POWER_PANELS, $parameters);
    }

    public function powerPanelsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_PANELS, $parameters, $id);
    }

    public function powerPanelsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::POWER_PANELS, $parameters, $id);
    }

    public function powerPanelsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::POWER_PANELS, $parameters, $id);
    }

    public function powerPanelsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::POWER_PANELS, $parameters, $id);
    }
    #endregion powerPanels

    #region powerPortTemplates
    public function powerPortTemplates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_PORT_TEMPLATES, $parameters);
    }

    public function powerPortTemplatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::POWER_PORT_TEMPLATES, $parameters);
    }

    public function powerPortTemplatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::POWER_PORT_TEMPLATES, $parameters);
    }

    public function powerPortTemplatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::POWER_PORT_TEMPLATES, $parameters);
    }

    public function powerPortTemplatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::POWER_PORT_TEMPLATES, $parameters);
    }

    public function powerPortTemplatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_PORT_TEMPLATES, $parameters, $id);
    }

    public function powerPortTemplatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::POWER_PORT_TEMPLATES, $parameters, $id);
    }

    public function powerPortTemplatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::POWER_PORT_TEMPLATES, $parameters, $id);
    }

    public function powerPortTemplatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::POWER_PORT_TEMPLATES, $parameters, $id);
    }
    #endregion powerPortTemplates

    #region powerPorts
    public function powerPorts(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_PORTS, $parameters);
    }

    public function powerPortsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::POWER_PORTS, $parameters);
    }

    public function powerPortsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::POWER_PORTS, $parameters);
    }

    public function powerPortsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::POWER_PORTS, $parameters);
    }

    public function powerPortsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::POWER_PORTS, $parameters);
    }

    public function powerPortsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_PORTS, $parameters, $id);
    }

    public function powerPortsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::POWER_PORTS, $parameters, $id);
    }

    public function powerPortsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::POWER_PORTS, $parameters, $id);
    }

    public function powerPortsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::POWER_PORTS, $parameters, $id);
    }

    public function powerPortsByIdTrace(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::POWER_PORTS, $parameters, $id, 'trace');
    }
    #endregion powerPorts

    #region rackReservations
    public function rackReservations(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::RACK_RESERVATIONS, $parameters);
    }

    public function rackReservationsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::RACK_RESERVATIONS, $parameters);
    }

    public function rackReservationsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::RACK_RESERVATIONS, $parameters);
    }

    public function rackReservationsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::RACK_RESERVATIONS, $parameters);
    }

    public function rackReservationsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::RACK_RESERVATIONS, $parameters);
    }

    public function rackReservationsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::RACK_RESERVATIONS, $parameters, $id);
    }

    public function rackReservationsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::RACK_RESERVATIONS, $parameters, $id);
    }

    public function rackReservationsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::RACK_RESERVATIONS, $parameters, $id);
    }

    public function rackReservationsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::RACK_RESERVATIONS, $parameters, $id);
    }
    #endregion rackReservations

    #region rackRoles
    public function rackRoles(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::RACK_ROLES, $parameters);
    }

    public function rackRolesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::RACK_ROLES, $parameters);
    }

    public function rackRolesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::RACK_ROLES, $parameters);
    }

    public function rackRolesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::RACK_ROLES, $parameters);
    }

    public function rackRolesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::RACK_ROLES, $parameters);
    }

    public function rackRolesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::RACK_ROLES, $parameters, $id);
    }

    public function rackRolesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::RACK_ROLES, $parameters, $id);
    }

    public function rackRolesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::RACK_ROLES, $parameters, $id);
    }

    public function rackRolesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::RACK_ROLES, $parameters, $id);
    }
    #endregion rackRoles

    #region rackTypes
    public function rackTypes(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::RACK_TYPES, $parameters);
    }

    public function rackTypesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::RACK_TYPES, $parameters);
    }

    public function rackTypesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::RACK_TYPES, $parameters);
    }

    public function rackTypesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::RACK_TYPES, $parameters);
    }

    public function rackTypesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::RACK_TYPES, $parameters);
    }

    public function rackTypesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::RACK_TYPES, $parameters, $id);
    }

    public function rackTypesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::RACK_TYPES, $parameters, $id);
    }

    public function rackTypesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::RACK_TYPES, $parameters, $id);
    }

    public function rackTypesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::RACK_TYPES, $parameters, $id);
    }
    #endregion rackTypes

    #region racks
    public function racks(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::RACKS, $parameters);
    }

    public function racksCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::RACKS, $parameters);
    }

    public function racksPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::RACKS, $parameters);
    }

    public function racksPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::RACKS, $parameters);
    }

    public function racksDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::RACKS, $parameters);
    }

    public function racksById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::RACKS, $parameters, $id);
    }

    public function racksByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::RACKS, $parameters, $id);
    }

    public function racksByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::RACKS, $parameters, $id);
    }

    public function racksByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::RACKS, $parameters, $id);
    }

    public function racksByIdElevation(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::RACKS, $parameters, $id, 'elevation');
    }
    #endregion racks

    #region rearPortTemplates
    public function rearPortTemplates(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::REAR_PORT_TEMPLATES, $parameters);
    }

    public function rearPortTemplatesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::REAR_PORT_TEMPLATES, $parameters);
    }

    public function rearPortTemplatesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::REAR_PORT_TEMPLATES, $parameters);
    }

    public function rearPortTemplatesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::REAR_PORT_TEMPLATES, $parameters);
    }

    public function rearPortTemplatesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::REAR_PORT_TEMPLATES, $parameters);
    }

    public function rearPortTemplatesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::REAR_PORT_TEMPLATES, $parameters, $id);
    }

    public function rearPortTemplatesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::REAR_PORT_TEMPLATES, $parameters, $id);
    }

    public function rearPortTemplatesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::REAR_PORT_TEMPLATES, $parameters, $id);
    }

    public function rearPortTemplatesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::REAR_PORT_TEMPLATES, $parameters, $id);
    }
    #endregion rearPortTemplates

    #region rearPorts
    public function rearPorts(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::REAR_PORTS, $parameters);
    }

    public function rearPortsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::REAR_PORTS, $parameters);
    }

    public function rearPortsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::REAR_PORTS, $parameters);
    }

    public function rearPortsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::REAR_PORTS, $parameters);
    }

    public function rearPortsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::REAR_PORTS, $parameters);
    }

    public function rearPortsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::REAR_PORTS, $parameters, $id);
    }

    public function rearPortsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::REAR_PORTS, $parameters, $id);
    }

    public function rearPortsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::REAR_PORTS, $parameters, $id);
    }

    public function rearPortsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::REAR_PORTS, $parameters, $id);
    }

    public function rearPortsByIdPaths(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::REAR_PORTS, $parameters, $id, 'paths');
    }
    #endregion rearPorts

    #region regions
    public function regions(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::REGIONS, $parameters);
    }

    public function regionsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::REGIONS, $parameters);
    }

    public function regionsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::REGIONS, $parameters);
    }

    public function regionsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::REGIONS, $parameters);
    }

    public function regionsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::REGIONS, $parameters);
    }

    public function regionsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::REGIONS, $parameters, $id);
    }

    public function regionsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::REGIONS, $parameters, $id);
    }

    public function regionsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::REGIONS, $parameters, $id);
    }

    public function regionsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::REGIONS, $parameters, $id);
    }
    #endregion regions

    #region siteGroups
    public function siteGroups(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SITE_GROUPS, $parameters);
    }

    public function siteGroupsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::SITE_GROUPS, $parameters);
    }

    public function siteGroupsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::SITE_GROUPS, $parameters);
    }

    public function siteGroupsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::SITE_GROUPS, $parameters);
    }

    public function siteGroupsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::SITE_GROUPS, $parameters);
    }

    public function siteGroupsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SITE_GROUPS, $parameters, $id);
    }

    public function siteGroupsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::SITE_GROUPS, $parameters, $id);
    }

    public function siteGroupsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::SITE_GROUPS, $parameters, $id);
    }

    public function siteGroupsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::SITE_GROUPS, $parameters, $id);
    }
    #endregion siteGroups

    #region sites
    public function sites(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SITES, $parameters);
    }

    public function sitesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::SITES, $parameters);
    }

    public function sitesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::SITES, $parameters);
    }

    public function sitesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::SITES, $parameters);
    }

    public function sitesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::SITES, $parameters);
    }

    public function sitesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::SITES, $parameters, $id);
    }

    public function sitesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::SITES, $parameters, $id);
    }

    public function sitesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::SITES, $parameters, $id);
    }

    public function sitesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::SITES, $parameters, $id);
    }
    #endregion sites

    #region virtualChassis
    public function virtualChassis(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VIRTUAL_CHASSIS, $parameters);
    }

    public function virtualChassisCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::VIRTUAL_CHASSIS, $parameters);
    }

    public function virtualChassisPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VIRTUAL_CHASSIS, $parameters);
    }

    public function virtualChassisPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VIRTUAL_CHASSIS, $parameters);
    }

    public function virtualChassisDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VIRTUAL_CHASSIS, $parameters);
    }

    public function virtualChassisById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VIRTUAL_CHASSIS, $parameters, $id);
    }

    public function virtualChassisByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VIRTUAL_CHASSIS, $parameters, $id);
    }

    public function virtualChassisByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VIRTUAL_CHASSIS, $parameters, $id);
    }

    public function virtualChassisByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VIRTUAL_CHASSIS, $parameters, $id);
    }
    #endregion virtualChassis

    #region virtualDeviceContexts
    public function virtualDeviceContexts(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VIRTUAL_DEVICE_CONTEXTS, $parameters);
    }

    public function virtualDeviceContextsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::VIRTUAL_DEVICE_CONTEXTS, $parameters);
    }

    public function virtualDeviceContextsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VIRTUAL_DEVICE_CONTEXTS, $parameters);
    }

    public function virtualDeviceContextsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VIRTUAL_DEVICE_CONTEXTS, $parameters);
    }

    public function virtualDeviceContextsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VIRTUAL_DEVICE_CONTEXTS, $parameters);
    }

    public function virtualDeviceContextsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::VIRTUAL_DEVICE_CONTEXTS, $parameters, $id);
    }

    public function virtualDeviceContextsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::VIRTUAL_DEVICE_CONTEXTS, $parameters, $id);
    }

    public function virtualDeviceContextsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::VIRTUAL_DEVICE_CONTEXTS, $parameters, $id);
    }

    public function virtualDeviceContextsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::VIRTUAL_DEVICE_CONTEXTS, $parameters, $id);
    }
    #endregion virtualDeviceContexts
}