<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTranscodeTemplateIds()
 * @method $this withTranscodeTemplateIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTranscodeTemplateGroupId()
 * @method $this withTranscodeTemplateGroupId($value)
 * @method string getForceDelGroup()
 * @method $this withForceDelGroup($value)
 */
class DeleteTranscodeTemplateGroup extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}
