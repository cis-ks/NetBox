<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxVpn extends NetBoxApiAbstract
{
    private const string IKE_POLICIES = 'vpn/ike-policies';
    private const string IKE_PROPOSALS = 'vpn/ike-proposals';
    private const string IPSEC_POLICIES = 'vpn/ipsec-policies';
    private const string IPSEC_PROFILES = 'vpn/ipsec-profiles';
    private const string IPSEC_PROPOSALS = 'vpn/ipsec-proposals';
    private const string L2VPN_TERMINATIONS = 'vpn/l2vpn-terminations';
    private const string L2VPNS = 'vpn/l2vpns';
    private const string TUNNEL_GROUPS = 'vpn/tunnel-groups';
    private const string TUNNEL_TERMINATIONS = 'vpn/tunnel-terminations';
    private const string TUNNELS = 'vpn/tunnels';

    #region ikePolicies
    public function ikePolicies(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IKE_POLICIES, $parameters);
    }

    public function ikePoliciesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::IKE_POLICIES, $parameters);
    }

    public function ikePoliciesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IKE_POLICIES, $parameters);
    }

    public function ikePoliciesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IKE_POLICIES, $parameters);
    }

    public function ikePoliciesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IKE_POLICIES, $parameters);
    }

    public function ikePoliciesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IKE_POLICIES, ['id' => $id, ...$parameters]);
    }

    public function ikePoliciesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IKE_POLICIES, ['id' => $id, ...$parameters]);
    }

    public function ikePoliciesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IKE_POLICIES, ['id' => $id, ...$parameters]);
    }

    public function ikePoliciesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IKE_POLICIES, ['id' => $id, ...$parameters]);
    }
    #endregion ikePolicies

    #region ikeProposals
    public function ikeProposals(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IKE_PROPOSALS, $parameters);
    }

    public function ikeProposalsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::IKE_PROPOSALS, $parameters);
    }

    public function ikeProposalsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IKE_PROPOSALS, $parameters);
    }

    public function ikeProposalsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IKE_PROPOSALS, $parameters);
    }

    public function ikeProposalsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IKE_PROPOSALS, $parameters);
    }

    public function ikeProposalsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IKE_PROPOSALS, ['id' => $id, ...$parameters]);
    }

    public function ikeProposalsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IKE_PROPOSALS, ['id' => $id, ...$parameters]);
    }

    public function ikeProposalsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IKE_PROPOSALS, ['id' => $id, ...$parameters]);
    }

    public function ikeProposalsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IKE_PROPOSALS, ['id' => $id, ...$parameters]);
    }
    #endregion ikeProposals

    #region ipsecPolicies
    public function ipsecPolicies(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IPSEC_POLICIES, $parameters);
    }

    public function ipsecPoliciesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::IPSEC_POLICIES, $parameters);
    }

    public function ipsecPoliciesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IPSEC_POLICIES, $parameters);
    }

    public function ipsecPoliciesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IPSEC_POLICIES, $parameters);
    }

    public function ipsecPoliciesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IPSEC_POLICIES, $parameters);
    }

    public function ipsecPoliciesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IPSEC_POLICIES, ['id' => $id, ...$parameters]);
    }

    public function ipsecPoliciesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IPSEC_POLICIES, ['id' => $id, ...$parameters]);
    }

    public function ipsecPoliciesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IPSEC_POLICIES, ['id' => $id, ...$parameters]);
    }

    public function ipsecPoliciesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IPSEC_POLICIES, ['id' => $id, ...$parameters]);
    }
    #endregion ipsecPolicies

    #region ipsecProfiles
    public function ipsecProfiles(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IPSEC_PROFILES, $parameters);
    }

    public function ipsecProfilesCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::IPSEC_PROFILES, $parameters);
    }

    public function ipsecProfilesPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IPSEC_PROFILES, $parameters);
    }

    public function ipsecProfilesPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IPSEC_PROFILES, $parameters);
    }

    public function ipsecProfilesDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IPSEC_PROFILES, $parameters);
    }

    public function ipsecProfilesById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IPSEC_PROFILES, ['id' => $id, ...$parameters]);
    }

    public function ipsecProfilesByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IPSEC_PROFILES, ['id' => $id, ...$parameters]);
    }

    public function ipsecProfilesByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IPSEC_PROFILES, ['id' => $id, ...$parameters]);
    }

    public function ipsecProfilesByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IPSEC_PROFILES, ['id' => $id, ...$parameters]);
    }
    #endregion ipsecProfiles

    #region ipsecProposals
    public function ipsecProposals(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IPSEC_PROPOSALS, $parameters);
    }

    public function ipsecProposalsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::IPSEC_PROPOSALS, $parameters);
    }

    public function ipsecProposalsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IPSEC_PROPOSALS, $parameters);
    }

    public function ipsecProposalsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IPSEC_PROPOSALS, $parameters);
    }

    public function ipsecProposalsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IPSEC_PROPOSALS, $parameters);
    }

    public function ipsecProposalsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::IPSEC_PROPOSALS, ['id' => $id, ...$parameters]);
    }

    public function ipsecProposalsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::IPSEC_PROPOSALS, ['id' => $id, ...$parameters]);
    }

    public function ipsecProposalsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::IPSEC_PROPOSALS, ['id' => $id, ...$parameters]);
    }

    public function ipsecProposalsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::IPSEC_PROPOSALS, ['id' => $id, ...$parameters]);
    }
    #endregion ipsecProposals

    #region l2vpnTerminations
    public function l2vpnTerminations(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::L2VPN_TERMINATIONS, $parameters);
    }

    public function l2vpnTerminationsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::L2VPN_TERMINATIONS, $parameters);
    }

    public function l2vpnTerminationsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::L2VPN_TERMINATIONS, $parameters);
    }

    public function l2vpnTerminationsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::L2VPN_TERMINATIONS, $parameters);
    }

    public function l2vpnTerminationsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::L2VPN_TERMINATIONS, $parameters);
    }

    public function l2vpnTerminationsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::L2VPN_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function l2vpnTerminationsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::L2VPN_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function l2vpnTerminationsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::L2VPN_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function l2vpnTerminationsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::L2VPN_TERMINATIONS, ['id' => $id, ...$parameters]);
    }
    #endregion l2vpnTerminations

    #region l2vpns
    public function l2vpns(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::L2VPNS, $parameters);
    }

    public function l2vpnsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::L2VPNS, $parameters);
    }

    public function l2vpnsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::L2VPNS, $parameters);
    }

    public function l2vpnsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::L2VPNS, $parameters);
    }

    public function l2vpnsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::L2VPNS, $parameters);
    }

    public function l2vpnsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::L2VPNS, ['id' => $id, ...$parameters]);
    }

    public function l2vpnsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::L2VPNS, ['id' => $id, ...$parameters]);
    }

    public function l2vpnsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::L2VPNS, ['id' => $id, ...$parameters]);
    }

    public function l2vpnsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::L2VPNS, ['id' => $id, ...$parameters]);
    }
    #endregion l2vpns

    #region tunnelGroups
    public function tunnelGroups(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TUNNEL_GROUPS, $parameters);
    }

    public function tunnelGroupsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::TUNNEL_GROUPS, $parameters);
    }

    public function tunnelGroupsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TUNNEL_GROUPS, $parameters);
    }

    public function tunnelGroupsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TUNNEL_GROUPS, $parameters);
    }

    public function tunnelGroupsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TUNNEL_GROUPS, $parameters);
    }

    public function tunnelGroupsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TUNNEL_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function tunnelGroupsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TUNNEL_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function tunnelGroupsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TUNNEL_GROUPS, ['id' => $id, ...$parameters]);
    }

    public function tunnelGroupsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TUNNEL_GROUPS, ['id' => $id, ...$parameters]);
    }
    #endregion tunnelGroups

    #region tunnelTerminations
    public function tunnelTerminations(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TUNNEL_TERMINATIONS, $parameters);
    }

    public function tunnelTerminationsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::TUNNEL_TERMINATIONS, $parameters);
    }

    public function tunnelTerminationsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TUNNEL_TERMINATIONS, $parameters);
    }

    public function tunnelTerminationsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TUNNEL_TERMINATIONS, $parameters);
    }

    public function tunnelTerminationsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TUNNEL_TERMINATIONS, $parameters);
    }

    public function tunnelTerminationsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TUNNEL_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function tunnelTerminationsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TUNNEL_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function tunnelTerminationsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TUNNEL_TERMINATIONS, ['id' => $id, ...$parameters]);
    }

    public function tunnelTerminationsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TUNNEL_TERMINATIONS, ['id' => $id, ...$parameters]);
    }
    #endregion tunnelTerminations

    #region tunnels
    public function tunnels(array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TUNNELS, $parameters);
    }

    public function tunnelsCreate(array $parameters = []): NetBoxResult|null
    {
        return $this->api->post(self::TUNNELS, $parameters);
    }

    public function tunnelsPut(array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TUNNELS, $parameters);
    }

    public function tunnelsPatch(array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TUNNELS, $parameters);
    }

    public function tunnelsDelete(array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TUNNELS, $parameters);
    }

    public function tunnelsById(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get(self::TUNNELS, ['id' => $id, ...$parameters]);
    }

    public function tunnelsByIdPut(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put(self::TUNNELS, ['id' => $id, ...$parameters]);
    }

    public function tunnelsByIdPatch(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch(self::TUNNELS, ['id' => $id, ...$parameters]);
    }

    public function tunnelsByIdDelete(int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete(self::TUNNELS, ['id' => $id, ...$parameters]);
    }
    #endregion tunnels
}