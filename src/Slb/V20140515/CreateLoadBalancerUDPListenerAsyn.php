<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Rpc;

/**
 * @method string getAccessKeyId()
 * @method string getHealthCheckConnectTimeout()
 * @method $this withHealthCheckConnectTimeout($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getMaxConnection()
 * @method $this withMaxConnection($value)
 * @method string getPersistenceTimeout()
 * @method $this withPersistenceTimeout($value)
 * @method string getVpcIds()
 * @method $this withVpcIds($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getMasterSlaveServerGroupId()
 * @method $this withMasterSlaveServerGroupId($value)
 * @method string getHealthCheckReq()
 * @method string getBackendServerPort()
 * @method $this withBackendServerPort($value)
 * @method string getHealthCheckInterval()
 * @method string getHealthCheckExp()
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 */
class CreateLoadBalancerUDPListenerAsyn extends Rpc
{
    public $product = 'Slb';

    public $version = '2014-05-15';

    public $method = 'POST';

    public $serviceCode = 'slb';

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

        return $this;
    }

    /**
     * @param string $healthCheckReq
     *
     * @return $this
     */
    public function withHealthCheckReq($healthCheckReq)
    {
        $this->data['HealthCheckReq'] = $healthCheckReq;
        $this->options['query']['healthCheckReq'] = $healthCheckReq;

        return $this;
    }

    /**
     * @param string $healthCheckInterval
     *
     * @return $this
     */
    public function withHealthCheckInterval($healthCheckInterval)
    {
        $this->data['HealthCheckInterval'] = $healthCheckInterval;
        $this->options['query']['healthCheckInterval'] = $healthCheckInterval;

        return $this;
    }

    /**
     * @param string $healthCheckExp
     *
     * @return $this
     */
    public function withHealthCheckExp($healthCheckExp)
    {
        $this->data['HealthCheckExp'] = $healthCheckExp;
        $this->options['query']['healthCheckExp'] = $healthCheckExp;

        return $this;
    }
}
