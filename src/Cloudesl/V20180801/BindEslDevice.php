<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class BindEslDevice extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';
}
