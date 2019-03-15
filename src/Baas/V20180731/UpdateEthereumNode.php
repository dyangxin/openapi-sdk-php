<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getNodeName()
 * @method $this withNodeName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class UpdateEthereumNode extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
