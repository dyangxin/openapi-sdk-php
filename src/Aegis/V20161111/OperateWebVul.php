<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class OperateWebVul extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
