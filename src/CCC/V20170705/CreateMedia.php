<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOssFilePath()
 * @method $this withOssFilePath($value)
 * @method string getUploadResult()
 * @method $this withUploadResult($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getOssFileName()
 * @method $this withOssFileName($value)
 */
class CreateMedia extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}
