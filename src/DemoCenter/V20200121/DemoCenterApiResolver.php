<?php

namespace AlibabaCloud\DemoCenter\V20200121;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateDemoAccessToken createDemoAccessToken(array $options = [])
 * @method DescribeDemoAccessToken describeDemoAccessToken(array $options = [])
 * @method ExpireDemoAccessToken expireDemoAccessToken(array $options = [])
 */
class DemoCenterApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'DemoCenter';

    /** @var string */
    public $version = '2020-01-21';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'DemoCenter';
}

/**
 * @method string getDemoId()
 */
class CreateDemoAccessToken extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDemoId($value)
    {
        $this->data['DemoId'] = $value;
        $this->options['form_params']['DemoId'] = $value;

        return $this;
    }
}

/**
 * @method string getDemoAccessToken()
 */
class DescribeDemoAccessToken extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDemoAccessToken($value)
    {
        $this->data['DemoAccessToken'] = $value;
        $this->options['form_params']['DemoAccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getDemoAccessToken()
 */
class ExpireDemoAccessToken extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDemoAccessToken($value)
    {
        $this->data['DemoAccessToken'] = $value;
        $this->options['form_params']['DemoAccessToken'] = $value;

        return $this;
    }
}
