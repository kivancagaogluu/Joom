<?php
/**
 * Author: Kıvanç Ağaoğlu
 * Web: https://kivancagaoglu.com
 * Mail: info@kivancagaoglu.com
 * Skype: kivancagaoglu
 * Github: https://github.com/kivancagaogluu/
 *
 */

namespace bluntk\Services;

use bluntk\Joom;

class Auth extends Joom
{

    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function getAccessToken()
    {
        $post = [
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'grant_type' => 'refresh_token',
            'refresh_token' => $this->refreshToken,
        ];
        $ch = curl_init(self::refreshTokenUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $headers = ['Content-Type: application/x-www-form-urlencoded'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        $result = json_decode($result);
        if($result->data->access_token){
            $this->accessToken = $result->data->access_token;
        }
        return $result;
    }

}