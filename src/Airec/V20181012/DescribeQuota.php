<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Roa;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeQuota extends Roa
{
    public $product = 'Airec';

    public $version = '2018-10-12';

    public $pathPattern = '/openapi/instances/[InstanceId]/quota';

    public $serviceCode = 'airec';
}
