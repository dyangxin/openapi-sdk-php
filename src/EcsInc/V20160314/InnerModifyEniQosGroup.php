<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTx()
 * @method $this withTx($value)
 * @method string getRx()
 * @method $this withRx($value)
 * @method string getRxPps()
 * @method $this withRxPps($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQosGroupName()
 * @method $this withQosGroupName($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method string getTxPps()
 * @method $this withTxPps($value)
 */
class InnerModifyEniQosGroup extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
