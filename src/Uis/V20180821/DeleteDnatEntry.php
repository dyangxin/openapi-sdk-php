<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisDnatId()
 * @method $this withUisDnatId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDnatEntry extends Rpc
{
    public $product = 'Uis';

    public $version = '2018-08-21';

    public $method = 'POST';

    public $serviceCode = 'uis';
}
