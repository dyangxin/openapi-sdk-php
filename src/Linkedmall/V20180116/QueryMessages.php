<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class QueryMessages extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';
}
