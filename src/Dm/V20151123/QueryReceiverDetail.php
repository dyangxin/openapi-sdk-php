<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getReceiverId()
 * @method $this withReceiverId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNextStart()
 * @method $this withNextStart($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 */
class QueryReceiverDetail extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';
}
