<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVideoIds()
 * @method $this withVideoIds($value)
 */
class DeleteMezzanines extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}
