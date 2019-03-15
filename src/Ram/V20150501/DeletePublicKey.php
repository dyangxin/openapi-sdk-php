<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getUserPublicKeyId()
 * @method $this withUserPublicKeyId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DeletePublicKey extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}
