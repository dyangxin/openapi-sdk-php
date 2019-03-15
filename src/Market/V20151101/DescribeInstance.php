<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstance extends Rpc
{
    public $product = 'Market';

    public $version = '2015-11-01';

    public $method = 'POST';
}
