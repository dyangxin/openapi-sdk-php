<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getLibrary()
 * @method $this withLibrary($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class DetectImageCelebrity extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
