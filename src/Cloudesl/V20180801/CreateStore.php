<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * @method string getCompanyId()
 * @method $this withCompanyId($value)
 * @method string getComments()
 * @method $this withComments($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getGroups()
 * @method $this withGroups($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getBrand()
 * @method $this withBrand($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class CreateStore extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';
}
