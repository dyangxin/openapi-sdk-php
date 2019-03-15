<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getCondition()
 * @method $this withCondition($value)
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class ListTagJobs extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
