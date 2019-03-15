<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeAccessWhitelistEcsList extends Rpc
{
    public $product = 'jarvis';

    public $version = '2018-02-06';

    public $method = 'POST';
}
