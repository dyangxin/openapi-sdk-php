<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * @method string getTargetVpcId()
 * @method $this withTargetVpcId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTargetZoneId()
 * @method $this withTargetZoneId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTargetRegionId()
 * @method $this withTargetRegionId($value)
 * @method string getTargetVSwitchId()
 * @method $this withTargetVSwitchId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AllocateInstanceVpcNetworkType extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';
}
