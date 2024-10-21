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
    public function ikePolicies(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IKE_POLICIES, $parameters);
    }

    public function ikePoliciesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::IKE_POLICIES, $parameters);
    }

    public function ikePoliciesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IKE_POLICIES, $parameters);
    }

    public function ikePoliciesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IKE_POLICIES, $parameters);
    }

    public function ikePoliciesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IKE_POLICIES, $parameters);
    }

    public function ikePoliciesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IKE_POLICIES, $parameters, $id);
    }

    public function ikePoliciesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IKE_POLICIES, $parameters, $id);
    }

    public function ikePoliciesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IKE_POLICIES, $parameters, $id);
    }

    public function ikePoliciesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IKE_POLICIES, $parameters, $id);
    }
    #endregion ikePolicies

    #region ikeProposals
    public function ikeProposals(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IKE_PROPOSALS, $parameters);
    }

    public function ikeProposalsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::IKE_PROPOSALS, $parameters);
    }

    public function ikeProposalsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IKE_PROPOSALS, $parameters);
    }

    public function ikeProposalsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IKE_PROPOSALS, $parameters);
    }

    public function ikeProposalsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IKE_PROPOSALS, $parameters);
    }

    public function ikeProposalsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IKE_PROPOSALS, $parameters, $id);
    }

    public function ikeProposalsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IKE_PROPOSALS, $parameters, $id);
    }

    public function ikeProposalsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IKE_PROPOSALS, $parameters, $id);
    }

    public function ikeProposalsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IKE_PROPOSALS, $parameters, $id);
    }
    #endregion ikeProposals

    #region ipsecPolicies
    public function ipsecPolicies(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IPSEC_POLICIES, $parameters);
    }

    public function ipsecPoliciesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::IPSEC_POLICIES, $parameters);
    }

    public function ipsecPoliciesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IPSEC_POLICIES, $parameters);
    }

    public function ipsecPoliciesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IPSEC_POLICIES, $parameters);
    }

    public function ipsecPoliciesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IPSEC_POLICIES, $parameters);
    }

    public function ipsecPoliciesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IPSEC_POLICIES, $parameters, $id);
    }

    public function ipsecPoliciesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IPSEC_POLICIES, $parameters, $id);
    }

    public function ipsecPoliciesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IPSEC_POLICIES, $parameters, $id);
    }

    public function ipsecPoliciesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IPSEC_POLICIES, $parameters, $id);
    }
    #endregion ipsecPolicies

    #region ipsecProfiles
    public function ipsecProfiles(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IPSEC_PROFILES, $parameters);
    }

    public function ipsecProfilesCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::IPSEC_PROFILES, $parameters);
    }

    public function ipsecProfilesPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IPSEC_PROFILES, $parameters);
    }

    public function ipsecProfilesPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IPSEC_PROFILES, $parameters);
    }

    public function ipsecProfilesDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IPSEC_PROFILES, $parameters);
    }

    public function ipsecProfilesById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IPSEC_PROFILES, $parameters, $id);
    }

    public function ipsecProfilesByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IPSEC_PROFILES, $parameters, $id);
    }

    public function ipsecProfilesByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IPSEC_PROFILES, $parameters, $id);
    }

    public function ipsecProfilesByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IPSEC_PROFILES, $parameters, $id);
    }
    #endregion ipsecProfiles

    #region ipsecProposals
    public function ipsecProposals(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IPSEC_PROPOSALS, $parameters);
    }

    public function ipsecProposalsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::IPSEC_PROPOSALS, $parameters);
    }

    public function ipsecProposalsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IPSEC_PROPOSALS, $parameters);
    }

    public function ipsecProposalsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IPSEC_PROPOSALS, $parameters);
    }

    public function ipsecProposalsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IPSEC_PROPOSALS, $parameters);
    }

    public function ipsecProposalsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::IPSEC_PROPOSALS, $parameters, $id);
    }

    public function ipsecProposalsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::IPSEC_PROPOSALS, $parameters, $id);
    }

    public function ipsecProposalsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::IPSEC_PROPOSALS, $parameters, $id);
    }

    public function ipsecProposalsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::IPSEC_PROPOSALS, $parameters, $id);
    }
    #endregion ipsecProposals

    #region l2vpnTerminations
    public function l2vpnTerminations(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::L2VPN_TERMINATIONS, $parameters);
    }

    public function l2vpnTerminationsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::L2VPN_TERMINATIONS, $parameters);
    }

    public function l2vpnTerminationsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::L2VPN_TERMINATIONS, $parameters);
    }

    public function l2vpnTerminationsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::L2VPN_TERMINATIONS, $parameters);
    }

    public function l2vpnTerminationsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::L2VPN_TERMINATIONS, $parameters);
    }

    public function l2vpnTerminationsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::L2VPN_TERMINATIONS, $parameters, $id);
    }

    public function l2vpnTerminationsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::L2VPN_TERMINATIONS, $parameters, $id);
    }

    public function l2vpnTerminationsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::L2VPN_TERMINATIONS, $parameters, $id);
    }

    public function l2vpnTerminationsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::L2VPN_TERMINATIONS, $parameters, $id);
    }
    #endregion l2vpnTerminations

    #region l2vpns
    public function l2vpns(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::L2VPNS, $parameters);
    }

    public function l2vpnsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::L2VPNS, $parameters);
    }

    public function l2vpnsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::L2VPNS, $parameters);
    }

    public function l2vpnsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::L2VPNS, $parameters);
    }

    public function l2vpnsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::L2VPNS, $parameters);
    }

    public function l2vpnsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::L2VPNS, $parameters, $id);
    }

    public function l2vpnsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::L2VPNS, $parameters, $id);
    }

    public function l2vpnsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::L2VPNS, $parameters, $id);
    }

    public function l2vpnsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::L2VPNS, $parameters, $id);
    }
    #endregion l2vpns

    #region tunnelGroups
    public function tunnelGroups(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TUNNEL_GROUPS, $parameters);
    }

    public function tunnelGroupsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::TUNNEL_GROUPS, $parameters);
    }

    public function tunnelGroupsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TUNNEL_GROUPS, $parameters);
    }

    public function tunnelGroupsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TUNNEL_GROUPS, $parameters);
    }

    public function tunnelGroupsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TUNNEL_GROUPS, $parameters);
    }

    public function tunnelGroupsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TUNNEL_GROUPS, $parameters, $id);
    }

    public function tunnelGroupsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TUNNEL_GROUPS, $parameters, $id);
    }

    public function tunnelGroupsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TUNNEL_GROUPS, $parameters, $id);
    }

    public function tunnelGroupsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TUNNEL_GROUPS, $parameters, $id);
    }
    #endregion tunnelGroups

    #region tunnelTerminations
    public function tunnelTerminations(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TUNNEL_TERMINATIONS, $parameters);
    }

    public function tunnelTerminationsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::TUNNEL_TERMINATIONS, $parameters);
    }

    public function tunnelTerminationsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TUNNEL_TERMINATIONS, $parameters);
    }

    public function tunnelTerminationsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TUNNEL_TERMINATIONS, $parameters);
    }

    public function tunnelTerminationsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TUNNEL_TERMINATIONS, $parameters);
    }

    public function tunnelTerminationsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TUNNEL_TERMINATIONS, $parameters, $id);
    }

    public function tunnelTerminationsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TUNNEL_TERMINATIONS, $parameters, $id);
    }

    public function tunnelTerminationsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TUNNEL_TERMINATIONS, $parameters, $id);
    }

    public function tunnelTerminationsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TUNNEL_TERMINATIONS, $parameters, $id);
    }
    #endregion tunnelTerminations

    #region tunnels
    public function tunnels(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TUNNELS, $parameters);
    }

    public function tunnelsCreate(...$parameters): NetBoxResult|null
    {
        return $this->doCall('post', self::TUNNELS, $parameters);
    }

    public function tunnelsPut(...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TUNNELS, $parameters);
    }

    public function tunnelsPatch(...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TUNNELS, $parameters);
    }

    public function tunnelsDelete(...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TUNNELS, $parameters);
    }

    public function tunnelsById(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::TUNNELS, $parameters, $id);
    }

    public function tunnelsByIdPut(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('put', self::TUNNELS, $parameters, $id);
    }

    public function tunnelsByIdPatch(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('patch', self::TUNNELS, $parameters, $id);
    }

    public function tunnelsByIdDelete(int $id, ...$parameters): NetBoxResult|null
    {
        return $this->doCall('delete', self::TUNNELS, $parameters, $id);
    }
    #endregion tunnels
}