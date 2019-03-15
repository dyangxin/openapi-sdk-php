<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelCall extends Rpc
{
    public $product = 'Dyvmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';
}
