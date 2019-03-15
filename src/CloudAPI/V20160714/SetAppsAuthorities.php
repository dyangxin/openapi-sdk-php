<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * @method string getAuthVaildTime()
 * @method $this withAuthVaildTime($value)
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getAppIds()
 * @method $this withAppIds($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getAuthValidTime()
 * @method $this withAuthValidTime($value)
 */
class SetAppsAuthorities extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
