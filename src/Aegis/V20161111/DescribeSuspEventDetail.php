<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSuspiciousEventId()
 * @method $this withSuspiciousEventId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSuspEventDetail extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
