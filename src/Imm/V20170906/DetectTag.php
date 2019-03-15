<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getSrcUris()
 * @method $this withSrcUris($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class DetectTag extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
