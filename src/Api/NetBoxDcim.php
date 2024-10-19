<?php

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxApi;
use Cis\NetBox\NetBoxResult;


class NetBoxDcim
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

    public function __construct(
        private readonly NetBoxApi $api,
    ) {}

    #region cableTerminations
    public function cableTerminations(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CABLE_TERMINATIONS, $parameters);
    }

    public function cableTerminationsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CABLE_TERMINATIONS, $parameters);
    }

    public function cableTerminationsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CABLE_TERMINATIONS, $parameters);
    }

    public function cableTerminationsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CABLE_TERMINATIONS, $parameters);
    }

    public function cableTerminationsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CABLE_TERMINATIONS, $parameters);
    }

    public function cableTerminationsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CABLE_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function cableTerminationsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CABLE_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function cableTerminationsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CABLE_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function cableTerminationsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CABLE_TERMINATIONS, ['id' => $id, ...$parameters]);
    }
    #endregion cableTerminations

    #region cables
    public function cables(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CABLES, $parameters);
    }

    public function cablesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CABLES, $parameters);
    }

    public function cablesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CABLES, $parameters);
    }

    public function cablesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CABLES, $parameters);
    }

    public function cablesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CABLES, $parameters);
    }

    public function cablesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CABLES, ['id' => $id, ...$parameters]);
    }

    public function cablesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CABLES, ['id' => $id, ...$parameters]);
    }

    public function cablesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CABLES, ['id' => $id, ...$parameters]);
    }

    public function cablesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CABLES, ['id' => $id, ...$parameters]);
    }
    #endregion cables

    #region connectedDevice
    public function connectedDevice(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONNECTED_DEVICE, $parameters);
    }
    #endregion connectedDevice

    #region consolePortTemplates
    public function consolePortTemplates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONSOLE_PORT_TEMPLATES, $parameters);
    }

    public function consolePortTemplatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CONSOLE_PORT_TEMPLATES, $parameters);
    }

    public function consolePortTemplatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONSOLE_PORT_TEMPLATES, $parameters);
    }

    public function consolePortTemplatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONSOLE_PORT_TEMPLATES, $parameters);
    }

    public function consolePortTemplatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONSOLE_PORT_TEMPLATES, $parameters);
    }

    public function consolePortTemplatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONSOLE_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function consolePortTemplatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONSOLE_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function consolePortTemplatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONSOLE_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function consolePortTemplatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONSOLE_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }
    #endregion consolePortTemplates

    #region consolePorts
    public function consolePorts(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONSOLE_PORTS, $parameters);
    }

    public function consolePortsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CONSOLE_PORTS, $parameters);
    }

    public function consolePortsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONSOLE_PORTS, $parameters);
    }

    public function consolePortsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONSOLE_PORTS, $parameters);
    }

    public function consolePortsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONSOLE_PORTS, $parameters);
    }

    public function consolePortsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONSOLE_PORTS, ['id' => $id, ...$parameters]);
    }

    public function consolePortsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONSOLE_PORTS, ['id' => $id, ...$parameters]);
    }

    public function consolePortsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONSOLE_PORTS, ['id' => $id, ...$parameters]);
    }

    public function consolePortsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONSOLE_PORTS, ['id' => $id, ...$parameters]);
    }

    public function consolePortsByIdTrace(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONSOLE_PORTS, ['id' => $id, 'submodule' => 'trace', ...$parameters]);
    }
    #endregion consolePorts

    #region consoleServerPortTemplates
    public function consoleServerPortTemplates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters);
    }

    public function consoleServerPortTemplatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters);
    }

    public function consoleServerPortTemplatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters);
    }

    public function consoleServerPortTemplatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters);
    }

    public function consoleServerPortTemplatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONSOLE_SERVER_PORT_TEMPLATES, $parameters);
    }

    public function consoleServerPortTemplatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONSOLE_SERVER_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function consoleServerPortTemplatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONSOLE_SERVER_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function consoleServerPortTemplatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONSOLE_SERVER_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function consoleServerPortTemplatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONSOLE_SERVER_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }
    #endregion consoleServerPortTemplates

    #region consoleServerPorts
    public function consoleServerPorts(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONSOLE_SERVER_PORTS, $parameters);
    }

    public function consoleServerPortsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::CONSOLE_SERVER_PORTS, $parameters);
    }

    public function consoleServerPortsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONSOLE_SERVER_PORTS, $parameters);
    }

    public function consoleServerPortsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONSOLE_SERVER_PORTS, $parameters);
    }

    public function consoleServerPortsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONSOLE_SERVER_PORTS, $parameters);
    }

    public function consoleServerPortsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONSOLE_SERVER_PORTS, ['id' => $id, ...$parameters]);
    }

    public function consoleServerPortsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::CONSOLE_SERVER_PORTS, ['id' => $id, ...$parameters]);
    }

    public function consoleServerPortsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::CONSOLE_SERVER_PORTS, ['id' => $id, ...$parameters]);
    }

    public function consoleServerPortsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::CONSOLE_SERVER_PORTS, ['id' => $id, ...$parameters]);
    }

    public function consoleServerPortsByIdTrace(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::CONSOLE_SERVER_PORTS, ['id' => $id, 'submodule' => 'trace', ...$parameters]);
    }
    #endregion consoleServerPorts

    #region deviceBayTemplates
    public function deviceBayTemplates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DEVICE_BAY_TEMPLATES, $parameters);
    }

    public function deviceBayTemplatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::DEVICE_BAY_TEMPLATES, $parameters);
    }

    public function deviceBayTemplatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::DEVICE_BAY_TEMPLATES, $parameters);
    }

    public function deviceBayTemplatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::DEVICE_BAY_TEMPLATES, $parameters);
    }

    public function deviceBayTemplatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::DEVICE_BAY_TEMPLATES, $parameters);
    }

    public function deviceBayTemplatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DEVICE_BAY_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function deviceBayTemplatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::DEVICE_BAY_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function deviceBayTemplatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::DEVICE_BAY_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function deviceBayTemplatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::DEVICE_BAY_TEMPLATES, ['id' => $id, ...$parameters]);
    }
    #endregion deviceBayTemplates

    #region deviceBays
    public function deviceBays(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DEVICE_BAYS, $parameters);
    }

    public function deviceBaysCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::DEVICE_BAYS, $parameters);
    }

    public function deviceBaysPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::DEVICE_BAYS, $parameters);
    }

    public function deviceBaysPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::DEVICE_BAYS, $parameters);
    }

    public function deviceBaysDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::DEVICE_BAYS, $parameters);
    }

    public function deviceBaysById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DEVICE_BAYS, ['id' => $id, ...$parameters]);
    }

    public function deviceBaysByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::DEVICE_BAYS, ['id' => $id, ...$parameters]);
    }

    public function deviceBaysByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::DEVICE_BAYS, ['id' => $id, ...$parameters]);
    }

    public function deviceBaysByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::DEVICE_BAYS, ['id' => $id, ...$parameters]);
    }
    #endregion deviceBays

    #region deviceRoles
    public function deviceRoles(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DEVICE_ROLES, $parameters);
    }

    public function deviceRolesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::DEVICE_ROLES, $parameters);
    }

    public function deviceRolesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::DEVICE_ROLES, $parameters);
    }

    public function deviceRolesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::DEVICE_ROLES, $parameters);
    }

    public function deviceRolesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::DEVICE_ROLES, $parameters);
    }

    public function deviceRolesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DEVICE_ROLES, ['id' => $id, ...$parameters]);
    }

    public function deviceRolesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::DEVICE_ROLES, ['id' => $id, ...$parameters]);
    }

    public function deviceRolesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::DEVICE_ROLES, ['id' => $id, ...$parameters]);
    }

    public function deviceRolesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::DEVICE_ROLES, ['id' => $id, ...$parameters]);
    }
    #endregion deviceRoles

    #region deviceTypes
    public function deviceTypes(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DEVICE_TYPES, $parameters);
    }

    public function deviceTypesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::DEVICE_TYPES, $parameters);
    }

    public function deviceTypesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::DEVICE_TYPES, $parameters);
    }

    public function deviceTypesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::DEVICE_TYPES, $parameters);
    }

    public function deviceTypesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::DEVICE_TYPES, $parameters);
    }

    public function deviceTypesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DEVICE_TYPES, ['id' => $id, ...$parameters]);
    }

    public function deviceTypesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::DEVICE_TYPES, ['id' => $id, ...$parameters]);
    }

    public function deviceTypesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::DEVICE_TYPES, ['id' => $id, ...$parameters]);
    }

    public function deviceTypesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::DEVICE_TYPES, ['id' => $id, ...$parameters]);
    }
    #endregion deviceTypes

    #region devices
    public function devices(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DEVICES, $parameters);
    }

    public function devicesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::DEVICES, $parameters);
    }

    public function devicesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::DEVICES, $parameters);
    }

    public function devicesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::DEVICES, $parameters);
    }

    public function devicesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::DEVICES, $parameters);
    }

    public function devicesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DEVICES, ['id' => $id, ...$parameters]);
    }

    public function devicesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::DEVICES, ['id' => $id, ...$parameters]);
    }

    public function devicesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::DEVICES, ['id' => $id, ...$parameters]);
    }

    public function devicesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::DEVICES, ['id' => $id, ...$parameters]);
    }

    public function devicesByIdRenderConfig(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::DEVICES, ['id' => $id, 'submodule' => 'render-config', ...$parameters]);
    }
    #endregion devices

    #region frontPortTemplates
    public function frontPortTemplates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::FRONT_PORT_TEMPLATES, $parameters);
    }

    public function frontPortTemplatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::FRONT_PORT_TEMPLATES, $parameters);
    }

    public function frontPortTemplatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::FRONT_PORT_TEMPLATES, $parameters);
    }

    public function frontPortTemplatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::FRONT_PORT_TEMPLATES, $parameters);
    }

    public function frontPortTemplatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::FRONT_PORT_TEMPLATES, $parameters);
    }

    public function frontPortTemplatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::FRONT_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function frontPortTemplatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::FRONT_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function frontPortTemplatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::FRONT_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function frontPortTemplatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::FRONT_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }
    #endregion frontPortTemplates

    #region frontPorts
    public function frontPorts(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::FRONT_PORTS, $parameters);
    }

    public function frontPortsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::FRONT_PORTS, $parameters);
    }

    public function frontPortsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::FRONT_PORTS, $parameters);
    }

    public function frontPortsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::FRONT_PORTS, $parameters);
    }

    public function frontPortsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::FRONT_PORTS, $parameters);
    }

    public function frontPortsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::FRONT_PORTS, ['id' => $id, ...$parameters]);
    }

    public function frontPortsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::FRONT_PORTS, ['id' => $id, ...$parameters]);
    }

    public function frontPortsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::FRONT_PORTS, ['id' => $id, ...$parameters]);
    }

    public function frontPortsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::FRONT_PORTS, ['id' => $id, ...$parameters]);
    }

    public function frontPortsByIdPaths(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::FRONT_PORTS, ['id' => $id, 'submodule' => 'paths', ...$parameters]);
    }
    #endregion frontPorts

    #region interfaceTemplates
    public function interfaceTemplates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::INTERFACE_TEMPLATES, $parameters);
    }

    public function interfaceTemplatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::INTERFACE_TEMPLATES, $parameters);
    }

    public function interfaceTemplatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::INTERFACE_TEMPLATES, $parameters);
    }

    public function interfaceTemplatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::INTERFACE_TEMPLATES, $parameters);
    }

    public function interfaceTemplatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::INTERFACE_TEMPLATES, $parameters);
    }

    public function interfaceTemplatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::INTERFACE_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function interfaceTemplatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::INTERFACE_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function interfaceTemplatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::INTERFACE_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function interfaceTemplatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::INTERFACE_TEMPLATES, ['id' => $id, ...$parameters]);
    }
    #endregion interfaceTemplates

    #region interfaces
    public function interfaces(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::INTERFACES, $parameters);
    }

    public function interfacesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::INTERFACES, $parameters);
    }

    public function interfacesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::INTERFACES, $parameters);
    }

    public function interfacesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::INTERFACES, $parameters);
    }

    public function interfacesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::INTERFACES, $parameters);
    }

    public function interfacesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::INTERFACES, ['id' => $id, ...$parameters]);
    }

    public function interfacesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::INTERFACES, ['id' => $id, ...$parameters]);
    }

    public function interfacesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::INTERFACES, ['id' => $id, ...$parameters]);
    }

    public function interfacesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::INTERFACES, ['id' => $id, ...$parameters]);
    }

    public function interfacesByIdTrace(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::INTERFACES, ['id' => $id, 'submodule' => 'trace', ...$parameters]);
    }
    #endregion interfaces

    #region inventoryItemRoles
    public function inventoryItemRoles(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::INVENTORY_ITEM_ROLES, $parameters);
    }

    public function inventoryItemRolesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::INVENTORY_ITEM_ROLES, $parameters);
    }

    public function inventoryItemRolesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::INVENTORY_ITEM_ROLES, $parameters);
    }

    public function inventoryItemRolesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::INVENTORY_ITEM_ROLES, $parameters);
    }

    public function inventoryItemRolesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::INVENTORY_ITEM_ROLES, $parameters);
    }

    public function inventoryItemRolesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::INVENTORY_ITEM_ROLES, ['id' => $id, ...$parameters]);
    }

    public function inventoryItemRolesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::INVENTORY_ITEM_ROLES, ['id' => $id, ...$parameters]);
    }

    public function inventoryItemRolesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::INVENTORY_ITEM_ROLES, ['id' => $id, ...$parameters]);
    }

    public function inventoryItemRolesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::INVENTORY_ITEM_ROLES, ['id' => $id, ...$parameters]);
    }
    #endregion inventoryItemRoles

    #region inventoryItemTemplates
    public function inventoryItemTemplates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::INVENTORY_ITEM_TEMPLATES, $parameters);
    }

    public function inventoryItemTemplatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::INVENTORY_ITEM_TEMPLATES, $parameters);
    }

    public function inventoryItemTemplatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::INVENTORY_ITEM_TEMPLATES, $parameters);
    }

    public function inventoryItemTemplatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::INVENTORY_ITEM_TEMPLATES, $parameters);
    }

    public function inventoryItemTemplatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::INVENTORY_ITEM_TEMPLATES, $parameters);
    }

    public function inventoryItemTemplatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::INVENTORY_ITEM_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function inventoryItemTemplatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::INVENTORY_ITEM_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function inventoryItemTemplatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::INVENTORY_ITEM_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function inventoryItemTemplatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::INVENTORY_ITEM_TEMPLATES, ['id' => $id, ...$parameters]);
    }
    #endregion inventoryItemTemplates

    #region inventoryItems
    public function inventoryItems(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::INVENTORY_ITEMS, $parameters);
    }

    public function inventoryItemsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::INVENTORY_ITEMS, $parameters);
    }

    public function inventoryItemsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::INVENTORY_ITEMS, $parameters);
    }

    public function inventoryItemsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::INVENTORY_ITEMS, $parameters);
    }

    public function inventoryItemsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::INVENTORY_ITEMS, $parameters);
    }

    public function inventoryItemsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::INVENTORY_ITEMS, ['id' => $id, ...$parameters]);
    }

    public function inventoryItemsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::INVENTORY_ITEMS, ['id' => $id, ...$parameters]);
    }

    public function inventoryItemsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::INVENTORY_ITEMS, ['id' => $id, ...$parameters]);
    }

    public function inventoryItemsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::INVENTORY_ITEMS, ['id' => $id, ...$parameters]);
    }
    #endregion inventoryItems

    #region locations
    public function locations(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::LOCATIONS, $parameters);
    }

    public function locationsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::LOCATIONS, $parameters);
    }

    public function locationsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::LOCATIONS, $parameters);
    }

    public function locationsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::LOCATIONS, $parameters);
    }

    public function locationsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::LOCATIONS, $parameters);
    }

    public function locationsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::LOCATIONS, ['id' => $id, ...$parameters]);
    }

    public function locationsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::LOCATIONS, ['id' => $id, ...$parameters]);
    }

    public function locationsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::LOCATIONS, ['id' => $id, ...$parameters]);
    }

    public function locationsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::LOCATIONS, ['id' => $id, ...$parameters]);
    }
    #endregion locations

    #region manufacturers
    public function manufacturers(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::MANUFACTURERS, $parameters);
    }

    public function manufacturersCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::MANUFACTURERS, $parameters);
    }

    public function manufacturersPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::MANUFACTURERS, $parameters);
    }

    public function manufacturersPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::MANUFACTURERS, $parameters);
    }

    public function manufacturersDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::MANUFACTURERS, $parameters);
    }

    public function manufacturersById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::MANUFACTURERS, ['id' => $id, ...$parameters]);
    }

    public function manufacturersByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::MANUFACTURERS, ['id' => $id, ...$parameters]);
    }

    public function manufacturersByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::MANUFACTURERS, ['id' => $id, ...$parameters]);
    }

    public function manufacturersByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::MANUFACTURERS, ['id' => $id, ...$parameters]);
    }
    #endregion manufacturers

    #region moduleBayTemplates
    public function moduleBayTemplates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::MODULE_BAY_TEMPLATES, $parameters);
    }

    public function moduleBayTemplatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::MODULE_BAY_TEMPLATES, $parameters);
    }

    public function moduleBayTemplatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::MODULE_BAY_TEMPLATES, $parameters);
    }

    public function moduleBayTemplatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::MODULE_BAY_TEMPLATES, $parameters);
    }

    public function moduleBayTemplatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::MODULE_BAY_TEMPLATES, $parameters);
    }

    public function moduleBayTemplatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::MODULE_BAY_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function moduleBayTemplatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::MODULE_BAY_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function moduleBayTemplatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::MODULE_BAY_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function moduleBayTemplatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::MODULE_BAY_TEMPLATES, ['id' => $id, ...$parameters]);
    }
    #endregion moduleBayTemplates

    #region moduleBays
    public function moduleBays(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::MODULE_BAYS, $parameters);
    }

    public function moduleBaysCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::MODULE_BAYS, $parameters);
    }

    public function moduleBaysPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::MODULE_BAYS, $parameters);
    }

    public function moduleBaysPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::MODULE_BAYS, $parameters);
    }

    public function moduleBaysDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::MODULE_BAYS, $parameters);
    }

    public function moduleBaysById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::MODULE_BAYS, ['id' => $id, ...$parameters]);
    }

    public function moduleBaysByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::MODULE_BAYS, ['id' => $id, ...$parameters]);
    }

    public function moduleBaysByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::MODULE_BAYS, ['id' => $id, ...$parameters]);
    }

    public function moduleBaysByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::MODULE_BAYS, ['id' => $id, ...$parameters]);
    }
    #endregion moduleBays

    #region moduleTypes
    public function moduleTypes(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::MODULE_TYPES, $parameters);
    }

    public function moduleTypesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::MODULE_TYPES, $parameters);
    }

    public function moduleTypesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::MODULE_TYPES, $parameters);
    }

    public function moduleTypesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::MODULE_TYPES, $parameters);
    }

    public function moduleTypesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::MODULE_TYPES, $parameters);
    }

    public function moduleTypesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::MODULE_TYPES, ['id' => $id, ...$parameters]);
    }

    public function moduleTypesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::MODULE_TYPES, ['id' => $id, ...$parameters]);
    }

    public function moduleTypesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::MODULE_TYPES, ['id' => $id, ...$parameters]);
    }

    public function moduleTypesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::MODULE_TYPES, ['id' => $id, ...$parameters]);
    }
    #endregion moduleTypes

    #region modules
    public function modules(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::MODULES, $parameters);
    }

    public function modulesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::MODULES, $parameters);
    }

    public function modulesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::MODULES, $parameters);
    }

    public function modulesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::MODULES, $parameters);
    }

    public function modulesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::MODULES, $parameters);
    }

    public function modulesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::MODULES, ['id' => $id, ...$parameters]);
    }

    public function modulesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::MODULES, ['id' => $id, ...$parameters]);
    }

    public function modulesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::MODULES, ['id' => $id, ...$parameters]);
    }

    public function modulesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::MODULES, ['id' => $id, ...$parameters]);
    }
    #endregion modules

    #region platforms
    public function platforms(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PLATFORMS, $parameters);
    }

    public function platformsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::PLATFORMS, $parameters);
    }

    public function platformsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::PLATFORMS, $parameters);
    }

    public function platformsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::PLATFORMS, $parameters);
    }

    public function platformsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::PLATFORMS, $parameters);
    }

    public function platformsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::PLATFORMS, ['id' => $id, ...$parameters]);
    }

    public function platformsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::PLATFORMS, ['id' => $id, ...$parameters]);
    }

    public function platformsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::PLATFORMS, ['id' => $id, ...$parameters]);
    }

    public function platformsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::PLATFORMS, ['id' => $id, ...$parameters]);
    }
    #endregion platforms

    #region powerFeeds
    public function powerFeeds(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_FEEDS, $parameters);
    }

    public function powerFeedsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::POWER_FEEDS, $parameters);
    }

    public function powerFeedsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::POWER_FEEDS, $parameters);
    }

    public function powerFeedsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::POWER_FEEDS, $parameters);
    }

    public function powerFeedsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::POWER_FEEDS, $parameters);
    }

    public function powerFeedsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_FEEDS, ['id' => $id, ...$parameters]);
    }

    public function powerFeedsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::POWER_FEEDS, ['id' => $id, ...$parameters]);
    }

    public function powerFeedsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::POWER_FEEDS, ['id' => $id, ...$parameters]);
    }

    public function powerFeedsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::POWER_FEEDS, ['id' => $id, ...$parameters]);
    }

    public function powerFeedsByIdTrace(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_FEEDS, ['id' => $id, 'submodule' => 'trace', ...$parameters]);
    }
    #endregion powerFeeds

    #region powerOutletTemplates
    public function powerOutletTemplates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_OUTLET_TEMPLATES, $parameters);
    }

    public function powerOutletTemplatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::POWER_OUTLET_TEMPLATES, $parameters);
    }

    public function powerOutletTemplatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::POWER_OUTLET_TEMPLATES, $parameters);
    }

    public function powerOutletTemplatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::POWER_OUTLET_TEMPLATES, $parameters);
    }

    public function powerOutletTemplatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::POWER_OUTLET_TEMPLATES, $parameters);
    }

    public function powerOutletTemplatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_OUTLET_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function powerOutletTemplatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::POWER_OUTLET_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function powerOutletTemplatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::POWER_OUTLET_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function powerOutletTemplatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::POWER_OUTLET_TEMPLATES, ['id' => $id, ...$parameters]);
    }
    #endregion powerOutletTemplates

    #region powerOutlets
    public function powerOutlets(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_OUTLETS, $parameters);
    }

    public function powerOutletsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::POWER_OUTLETS, $parameters);
    }

    public function powerOutletsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::POWER_OUTLETS, $parameters);
    }

    public function powerOutletsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::POWER_OUTLETS, $parameters);
    }

    public function powerOutletsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::POWER_OUTLETS, $parameters);
    }

    public function powerOutletsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_OUTLETS, ['id' => $id, ...$parameters]);
    }

    public function powerOutletsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::POWER_OUTLETS, ['id' => $id, ...$parameters]);
    }

    public function powerOutletsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::POWER_OUTLETS, ['id' => $id, ...$parameters]);
    }

    public function powerOutletsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::POWER_OUTLETS, ['id' => $id, ...$parameters]);
    }

    public function powerOutletsByIdTrace(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_OUTLETS, ['id' => $id, 'submodule' => 'trace', ...$parameters]);
    }
    #endregion powerOutlets

    #region powerPanels
    public function powerPanels(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_PANELS, $parameters);
    }

    public function powerPanelsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::POWER_PANELS, $parameters);
    }

    public function powerPanelsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::POWER_PANELS, $parameters);
    }

    public function powerPanelsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::POWER_PANELS, $parameters);
    }

    public function powerPanelsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::POWER_PANELS, $parameters);
    }

    public function powerPanelsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_PANELS, ['id' => $id, ...$parameters]);
    }

    public function powerPanelsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::POWER_PANELS, ['id' => $id, ...$parameters]);
    }

    public function powerPanelsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::POWER_PANELS, ['id' => $id, ...$parameters]);
    }

    public function powerPanelsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::POWER_PANELS, ['id' => $id, ...$parameters]);
    }
    #endregion powerPanels

    #region powerPortTemplates
    public function powerPortTemplates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_PORT_TEMPLATES, $parameters);
    }

    public function powerPortTemplatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::POWER_PORT_TEMPLATES, $parameters);
    }

    public function powerPortTemplatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::POWER_PORT_TEMPLATES, $parameters);
    }

    public function powerPortTemplatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::POWER_PORT_TEMPLATES, $parameters);
    }

    public function powerPortTemplatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::POWER_PORT_TEMPLATES, $parameters);
    }

    public function powerPortTemplatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function powerPortTemplatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::POWER_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function powerPortTemplatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::POWER_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function powerPortTemplatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::POWER_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }
    #endregion powerPortTemplates

    #region powerPorts
    public function powerPorts(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_PORTS, $parameters);
    }

    public function powerPortsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::POWER_PORTS, $parameters);
    }

    public function powerPortsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::POWER_PORTS, $parameters);
    }

    public function powerPortsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::POWER_PORTS, $parameters);
    }

    public function powerPortsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::POWER_PORTS, $parameters);
    }

    public function powerPortsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_PORTS, ['id' => $id, ...$parameters]);
    }

    public function powerPortsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::POWER_PORTS, ['id' => $id, ...$parameters]);
    }

    public function powerPortsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::POWER_PORTS, ['id' => $id, ...$parameters]);
    }

    public function powerPortsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::POWER_PORTS, ['id' => $id, ...$parameters]);
    }

    public function powerPortsByIdTrace(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::POWER_PORTS, ['id' => $id, 'submodule' => 'trace', ...$parameters]);
    }
    #endregion powerPorts

    #region rackReservations
    public function rackReservations(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::RACK_RESERVATIONS, $parameters);
    }

    public function rackReservationsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::RACK_RESERVATIONS, $parameters);
    }

    public function rackReservationsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::RACK_RESERVATIONS, $parameters);
    }

    public function rackReservationsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::RACK_RESERVATIONS, $parameters);
    }

    public function rackReservationsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::RACK_RESERVATIONS, $parameters);
    }

    public function rackReservationsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::RACK_RESERVATIONS, ['id' => $id, ...$parameters]);
    }

    public function rackReservationsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::RACK_RESERVATIONS, ['id' => $id, ...$parameters]);
    }

    public function rackReservationsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::RACK_RESERVATIONS, ['id' => $id, ...$parameters]);
    }

    public function rackReservationsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::RACK_RESERVATIONS, ['id' => $id, ...$parameters]);
    }
    #endregion rackReservations

    #region rackRoles
    public function rackRoles(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::RACK_ROLES, $parameters);
    }

    public function rackRolesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::RACK_ROLES, $parameters);
    }

    public function rackRolesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::RACK_ROLES, $parameters);
    }

    public function rackRolesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::RACK_ROLES, $parameters);
    }

    public function rackRolesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::RACK_ROLES, $parameters);
    }

    public function rackRolesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::RACK_ROLES, ['id' => $id, ...$parameters]);
    }

    public function rackRolesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::RACK_ROLES, ['id' => $id, ...$parameters]);
    }

    public function rackRolesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::RACK_ROLES, ['id' => $id, ...$parameters]);
    }

    public function rackRolesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::RACK_ROLES, ['id' => $id, ...$parameters]);
    }
    #endregion rackRoles

    #region rackTypes
    public function rackTypes(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::RACK_TYPES, $parameters);
    }

    public function rackTypesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::RACK_TYPES, $parameters);
    }

    public function rackTypesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::RACK_TYPES, $parameters);
    }

    public function rackTypesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::RACK_TYPES, $parameters);
    }

    public function rackTypesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::RACK_TYPES, $parameters);
    }

    public function rackTypesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::RACK_TYPES, ['id' => $id, ...$parameters]);
    }

    public function rackTypesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::RACK_TYPES, ['id' => $id, ...$parameters]);
    }

    public function rackTypesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::RACK_TYPES, ['id' => $id, ...$parameters]);
    }

    public function rackTypesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::RACK_TYPES, ['id' => $id, ...$parameters]);
    }
    #endregion rackTypes

    #region racks
    public function racks(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::RACKS, $parameters);
    }

    public function racksCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::RACKS, $parameters);
    }

    public function racksPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::RACKS, $parameters);
    }

    public function racksPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::RACKS, $parameters);
    }

    public function racksDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::RACKS, $parameters);
    }

    public function racksById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::RACKS, ['id' => $id, ...$parameters]);
    }

    public function racksByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::RACKS, ['id' => $id, ...$parameters]);
    }

    public function racksByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::RACKS, ['id' => $id, ...$parameters]);
    }

    public function racksByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::RACKS, ['id' => $id, ...$parameters]);
    }

    public function racksByIdElevation(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::RACKS, ['id' => $id, 'submodule' => 'elevation', ...$parameters]);
    }
    #endregion racks

    #region rearPortTemplates
    public function rearPortTemplates(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::REAR_PORT_TEMPLATES, $parameters);
    }

    public function rearPortTemplatesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::REAR_PORT_TEMPLATES, $parameters);
    }

    public function rearPortTemplatesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::REAR_PORT_TEMPLATES, $parameters);
    }

    public function rearPortTemplatesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::REAR_PORT_TEMPLATES, $parameters);
    }

    public function rearPortTemplatesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::REAR_PORT_TEMPLATES, $parameters);
    }

    public function rearPortTemplatesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::REAR_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function rearPortTemplatesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::REAR_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function rearPortTemplatesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::REAR_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }

    public function rearPortTemplatesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::REAR_PORT_TEMPLATES, ['id' => $id, ...$parameters]);
    }
    #endregion rearPortTemplates

    #region rearPorts
    public function rearPorts(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::REAR_PORTS, $parameters);
    }

    public function rearPortsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::REAR_PORTS, $parameters);
    }

    public function rearPortsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::REAR_PORTS, $parameters);
    }

    public function rearPortsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::REAR_PORTS, $parameters);
    }

    public function rearPortsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::REAR_PORTS, $parameters);
    }

    public function rearPortsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::REAR_PORTS, ['id' => $id, ...$parameters]);
    }

    public function rearPortsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::REAR_PORTS, ['id' => $id, ...$parameters]);
    }

    public function rearPortsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::REAR_PORTS, ['id' => $id, ...$parameters]);
    }

    public function rearPortsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::REAR_PORTS, ['id' => $id, ...$parameters]);
    }

    public function rearPortsByIdPaths(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::REAR_PORTS, ['id' => $id, 'submodule' => 'paths', ...$parameters]);
    }
    #endregion rearPorts

    #region regions
    public function regions(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::REGIONS, $parameters);
    }

    public function regionsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::REGIONS, $parameters);
    }

    public function regionsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::REGIONS, $parameters);
    }

    public function regionsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::REGIONS, $parameters);
    }

    public function regionsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::REGIONS, $parameters);
    }

    public function regionsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::REGIONS, ['id' => $id, ...$parameters]);
    }

    public function regionsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::REGIONS, ['id' => $id, ...$parameters]);
    }

    public function regionsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::REGIONS, ['id' => $id, ...$parameters]);
    }

    public function regionsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::REGIONS, ['id' => $id, ...$parameters]);
    }
    #endregion regions

    #region siteGroups
    public function siteGroups(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SITE_GROUPS, $parameters);
    }

    public function siteGroupsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::SITE_GROUPS, $parameters);
    }

    public function siteGroupsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::SITE_GROUPS, $parameters);
    }

    public function siteGroupsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::SITE_GROUPS, $parameters);
    }

    public function siteGroupsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::SITE_GROUPS, $parameters);
    }

    public function siteGroupsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SITE_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function siteGroupsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::SITE_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function siteGroupsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::SITE_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function siteGroupsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::SITE_GROUPS, ['id' => $id, ...$parameters]);
    }
    #endregion siteGroups

    #region sites
    public function sites(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SITES, $parameters);
    }

    public function sitesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::SITES, $parameters);
    }

    public function sitesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::SITES, $parameters);
    }

    public function sitesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::SITES, $parameters);
    }

    public function sitesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::SITES, $parameters);
    }

    public function sitesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::SITES, ['id' => $id, ...$parameters]);
    }

    public function sitesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::SITES, ['id' => $id, ...$parameters]);
    }

    public function sitesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::SITES, ['id' => $id, ...$parameters]);
    }

    public function sitesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::SITES, ['id' => $id, ...$parameters]);
    }
    #endregion sites

    #region virtualChassis
    public function virtualChassis(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_CHASSIS, $parameters);
    }

    public function virtualChassisCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::VIRTUAL_CHASSIS, $parameters);
    }

    public function virtualChassisPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_CHASSIS, $parameters);
    }

    public function virtualChassisPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_CHASSIS, $parameters);
    }

    public function virtualChassisDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_CHASSIS, $parameters);
    }

    public function virtualChassisById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_CHASSIS, ['id' => $id, ...$parameters]);
    }

    public function virtualChassisByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_CHASSIS, ['id' => $id, ...$parameters]);
    }

    public function virtualChassisByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_CHASSIS, ['id' => $id, ...$parameters]);
    }

    public function virtualChassisByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_CHASSIS, ['id' => $id, ...$parameters]);
    }
    #endregion virtualChassis

    #region virtualDeviceContexts
    public function virtualDeviceContexts(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_DEVICE_CONTEXTS, $parameters);
    }

    public function virtualDeviceContextsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::VIRTUAL_DEVICE_CONTEXTS, $parameters);
    }

    public function virtualDeviceContextsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_DEVICE_CONTEXTS, $parameters);
    }

    public function virtualDeviceContextsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_DEVICE_CONTEXTS, $parameters);
    }

    public function virtualDeviceContextsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_DEVICE_CONTEXTS, $parameters);
    }

    public function virtualDeviceContextsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::VIRTUAL_DEVICE_CONTEXTS, ['id' => $id, ...$parameters]);
    }

    public function virtualDeviceContextsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::VIRTUAL_DEVICE_CONTEXTS, ['id' => $id, ...$parameters]);
    }

    public function virtualDeviceContextsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::VIRTUAL_DEVICE_CONTEXTS, ['id' => $id, ...$parameters]);
    }

    public function virtualDeviceContextsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::VIRTUAL_DEVICE_CONTEXTS, ['id' => $id, ...$parameters]);
    }
    #endregion virtualDeviceContexts
}