<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRecoveryMode()
 * @method $this withRecoveryMode($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaRecoveryMode extends Rpc
{
    public $product = 'Dds';

    public $version = '2015-12-01';

    public $method = 'POST';

    public $serviceCode = 'dds';
}
