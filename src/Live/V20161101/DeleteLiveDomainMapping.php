<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getPullDomain()
 * @method $this withPullDomain($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPushDomain()
 * @method $this withPushDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveDomainMapping extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}
