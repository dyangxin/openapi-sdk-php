<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Slb based on the method name as the Api name.
 *
 *
 * @method AddAccessControlListEntry addAccessControlListEntry(array $options = [])
 * @method AddBackendServers addBackendServers(array $options = [])
 * @method AddBackendServersAsyn addBackendServersAsyn(array $options = [])
 * @method AddListenerWhiteListItem addListenerWhiteListItem(array $options = [])
 * @method AddTags addTags(array $options = [])
 * @method AddVServerGroupBackendServers addVServerGroupBackendServers(array $options = [])
 * @method AddVServerGroupBackendServersAsyn addVServerGroupBackendServersAsyn(array $options = [])
 * @method CreateAccessControlList createAccessControlList(array $options = [])
 * @method CreateDomainExtension createDomainExtension(array $options = [])
 * @method CreateLoadBalancer createLoadBalancer(array $options = [])
 * @method CreateLoadBalancerHTTPListener createLoadBalancerHTTPListener(array $options = [])
 * @method CreateLoadBalancerHTTPListenerAsyn createLoadBalancerHTTPListenerAsyn(array $options = [])
 * @method CreateLoadBalancerHTTPSListener createLoadBalancerHTTPSListener(array $options = [])
 * @method CreateLoadBalancerHTTPSListenerAsyn createLoadBalancerHTTPSListenerAsyn(array $options = [])
 * @method CreateLoadBalancerOld createLoadBalancerOld(array $options = [])
 * @method CreateLoadBalancerTCPListener createLoadBalancerTCPListener(array $options = [])
 * @method CreateLoadBalancerTCPListenerAsyn createLoadBalancerTCPListenerAsyn(array $options = [])
 * @method CreateLoadBalancerUDPListener createLoadBalancerUDPListener(array $options = [])
 * @method CreateLoadBalancerUDPListenerAsyn createLoadBalancerUDPListenerAsyn(array $options = [])
 * @method CreateMasterSlaveServerGroup createMasterSlaveServerGroup(array $options = [])
 * @method CreateMasterSlaveVServerGroup createMasterSlaveVServerGroup(array $options = [])
 * @method CreateRule createRule(array $options = [])
 * @method CreateRules createRules(array $options = [])
 * @method CreateVServerGroup createVServerGroup(array $options = [])
 * @method DeleteAccessControlList deleteAccessControlList(array $options = [])
 * @method DeleteCACertificate deleteCACertificate(array $options = [])
 * @method DeleteDomainExtension deleteDomainExtension(array $options = [])
 * @method DeleteLoadBalancer deleteLoadBalancer(array $options = [])
 * @method DeleteLoadBalancerListener deleteLoadBalancerListener(array $options = [])
 * @method DeleteMasterSlaveServerGroup deleteMasterSlaveServerGroup(array $options = [])
 * @method DeleteMasterSlaveVServerGroup deleteMasterSlaveVServerGroup(array $options = [])
 * @method DeleteRule deleteRule(array $options = [])
 * @method DeleteRules deleteRules(array $options = [])
 * @method DeleteServerCertificate deleteServerCertificate(array $options = [])
 * @method DeleteVServerGroup deleteVServerGroup(array $options = [])
 * @method DescribeAccessControlListAttribute describeAccessControlListAttribute(array $options = [])
 * @method DescribeAccessControlLists describeAccessControlLists(array $options = [])
 * @method DescribeAutoRenewStatus describeAutoRenewStatus(array $options = [])
 * @method DescribeCACertificates describeCACertificates(array $options = [])
 * @method DescribeCertificateRelatedListenersAndRules describeCertificateRelatedListenersAndRules(array $options = [])
 * @method DescribeDomainExtensions describeDomainExtensions(array $options = [])
 * @method DescribeHealthCheckDiagnoseResult describeHealthCheckDiagnoseResult(array $options = [])
 * @method DescribeHealthStatus describeHealthStatus(array $options = [])
 * @method DescribeIdleInstances describeIdleInstances(array $options = [])
 * @method DescribeIdleInstancesForGlobal describeIdleInstancesForGlobal(array $options = [])
 * @method DescribeListenerAccessControlAttribute describeListenerAccessControlAttribute(array $options = [])
 * @method DescribeLoadBalancerAttribute describeLoadBalancerAttribute(array $options = [])
 * @method DescribeLoadBalancerAutoReleaseTime describeLoadBalancerAutoReleaseTime(array $options = [])
 * @method DescribeLoadBalancerBackendServers describeLoadBalancerBackendServers(array $options = [])
 * @method DescribeLoadBalancerHTTPListenerAttribute describeLoadBalancerHTTPListenerAttribute(array $options = [])
 * @method DescribeLoadBalancerHTTPSListenerAttribute describeLoadBalancerHTTPSListenerAttribute(array $options = [])
 * @method DescribeLoadBalancerSummaryForGlobal describeLoadBalancerSummaryForGlobal(array $options = [])
 * @method DescribeLoadBalancerTCPListenerAttribute describeLoadBalancerTCPListenerAttribute(array $options = [])
 * @method DescribeLoadBalancerUDPListenerAttribute describeLoadBalancerUDPListenerAttribute(array $options = [])
 * @method DescribeLoadBalancers describeLoadBalancers(array $options = [])
 * @method DescribeLoadBalancersPro describeLoadBalancersPro(array $options = [])
 * @method DescribeLoadBalancersRelatedEcs describeLoadBalancersRelatedEcs(array $options = [])
 * @method DescribeMasterSlaveServerGroupAttribute describeMasterSlaveServerGroupAttribute(array $options = [])
 * @method DescribeMasterSlaveServerGroups describeMasterSlaveServerGroups(array $options = [])
 * @method DescribeMasterSlaveVServerGroupAttribute describeMasterSlaveVServerGroupAttribute(array $options = [])
 * @method DescribeMasterSlaveVServerGroups describeMasterSlaveVServerGroups(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRuleAttribute describeRuleAttribute(array $options = [])
 * @method DescribeRuleAttributes describeRuleAttributes(array $options = [])
 * @method DescribeRules describeRules(array $options = [])
 * @method DescribeServerCertificates describeServerCertificates(array $options = [])
 * @method DescribeSlbAttachmentInfo describeSlbAttachmentInfo(array $options = [])
 * @method DescribeSlbEcsRelationTimes describeSlbEcsRelationTimes(array $options = [])
 * @method DescribeSlbQuotas describeSlbQuotas(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method DescribeVServerGroupAttribute describeVServerGroupAttribute(array $options = [])
 * @method DescribeVServerGroupAttributes describeVServerGroupAttributes(array $options = [])
 * @method DescribeVServerGroups describeVServerGroups(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DiagnoseCertificates diagnoseCertificates(array $options = [])
 * @method DiagnoseCommonStatus diagnoseCommonStatus(array $options = [])
 * @method DiagnoseHealthCheckStatus diagnoseHealthCheckStatus(array $options = [])
 * @method InnerQueryQuotaConfig innerQueryQuotaConfig(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyLoadBalancerInstanceSpec modifyLoadBalancerInstanceSpec(array $options = [])
 * @method ModifyLoadBalancerInternetSpec modifyLoadBalancerInternetSpec(array $options = [])
 * @method ModifyLoadBalancerPayType modifyLoadBalancerPayType(array $options = [])
 * @method ModifyLoadBalancerResourceGroup modifyLoadBalancerResourceGroup(array $options = [])
 * @method ModifyLoadBalancerVPCAddress modifyLoadBalancerVPCAddress(array $options = [])
 * @method ModifyVServerGroupBackendServers modifyVServerGroupBackendServers(array $options = [])
 * @method ModifyVServerGroupBackendServersAsyn modifyVServerGroupBackendServersAsyn(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method RemoveAccessControlListEntry removeAccessControlListEntry(array $options = [])
 * @method RemoveBackendServers removeBackendServers(array $options = [])
 * @method RemoveBackendServersAsyn removeBackendServersAsyn(array $options = [])
 * @method RemoveListenerWhiteListItem removeListenerWhiteListItem(array $options = [])
 * @method RemoveTags removeTags(array $options = [])
 * @method RemoveVServerGroupBackendServer removeVServerGroupBackendServer(array $options = [])
 * @method RemoveVServerGroupBackendServers removeVServerGroupBackendServers(array $options = [])
 * @method RemoveVServerGroupBackendServersAsyn removeVServerGroupBackendServersAsyn(array $options = [])
 * @method SetAccessControlListAttribute setAccessControlListAttribute(array $options = [])
 * @method SetAccessControlListAttributeImpl setAccessControlListAttributeImpl(array $options = [])
 * @method SetAutoRenewStatus setAutoRenewStatus(array $options = [])
 * @method SetBackendServers setBackendServers(array $options = [])
 * @method SetBackendServersAsyn setBackendServersAsyn(array $options = [])
 * @method SetCACertificateName setCACertificateName(array $options = [])
 * @method SetDomainExtensionAttribute setDomainExtensionAttribute(array $options = [])
 * @method SetListenerAccessControlStatus setListenerAccessControlStatus(array $options = [])
 * @method SetLoadBalancerAutoReleaseTime setLoadBalancerAutoReleaseTime(array $options = [])
 * @method SetLoadBalancerHTTPListenerAttribute setLoadBalancerHTTPListenerAttribute(array $options = [])
 * @method SetLoadBalancerHTTPSListenerAttribute setLoadBalancerHTTPSListenerAttribute(array $options = [])
 * @method SetLoadBalancerName setLoadBalancerName(array $options = [])
 * @method SetLoadBalancerStatus setLoadBalancerStatus(array $options = [])
 * @method SetLoadBalancerTCPListenerAttribute setLoadBalancerTCPListenerAttribute(array $options = [])
 * @method SetLoadBalancerUDPListenerAttribute setLoadBalancerUDPListenerAttribute(array $options = [])
 * @method SetRule setRule(array $options = [])
 * @method SetServerCertificateName setServerCertificateName(array $options = [])
 * @method SetVServerGroup setVServerGroup(array $options = [])
 * @method SetVServerGroupAttribute setVServerGroupAttribute(array $options = [])
 * @method SetVServerGroupAttributeAsyn setVServerGroupAttributeAsyn(array $options = [])
 * @method StartLoadBalancerListener startLoadBalancerListener(array $options = [])
 * @method StopLoadBalancerListener stopLoadBalancerListener(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UploadCACertificate uploadCACertificate(array $options = [])
 * @method UploadServerCertificate uploadServerCertificate(array $options = [])
 */
class SlbApiResolver
{
    use ApiResolverTrait;
}
