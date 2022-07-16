<?php
/**
 * Author: Kıvanç Ağaoğlu
 * Web: https://kivancagaoglu.com
 * Mail: info@kivancagaoglu.com
 * Skype: kivancagaoglu
 * Github: https://github.com/kivancagaogluu/
 *
 */

namespace bluntk;

use bluntk\Joom\Services\Product;

class Joom
{

    protected $clientId;

    protected $clientSecret;

    protected $refreshToken;

    protected $accessToken;

    protected $config;

    Const v3url = 'https://api-merchant.joom.com/api/v3';

    Const refreshTokenUrl = 'https://api-merchant.joom.com/api/v2/oauth/refresh_token';

    public function __construct($config)
    {
        $this->clientId = $config['clientId'];
        $this->clientSecret = $config['clientSecret'];
        $this->refreshToken = $config['refreshToken'];
        $this->accessToken = $config['accessToken'];
        $this->config = $config;
    }

    public function auth()
    {
        return new Services\Auth($this->config);
    }

    public function product()
    {
        return new Services\Product($this->config);
    }




}