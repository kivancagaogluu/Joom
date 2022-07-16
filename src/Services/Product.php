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

class Product extends Joom
{

    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function products($params = [])
    {
        $url = parent::v3url . '/products';
        if (!empty($params)) {
            $url .= '?';
            $url .= http_build_query($params);
        }
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            'Authorization: Bearer ' . $this->accessToken
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return json_decode($result);
    }

    public function retrieveProducts($params = [])
    {
        $url = parent::v3url . '/products/multi';
        if (!empty($params)) {
            $url .= '?';
            $url .= http_build_query($params);
        }
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            'Authorization: Bearer ' . $this->accessToken
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return json_decode($result);
    }

    public function retrieveNumberOfProducts($params = [])
    {
        $url = parent::v3url . '/products/multi/count';
        if (!empty($params)) {
            $url .= '?';
            $url .= http_build_query($params);
        }
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            'Authorization: Bearer ' . $this->accessToken
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return json_decode($result);
    }

    public function getPublishedVersionsOfProducts($params = [])
    {
        $url = parent::v3url . '/products/published';
        if (!empty($params)) {
            $url .= '?';
            $url .= http_build_query($params);
        }
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            'Authorization: Bearer ' . $this->accessToken
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return json_decode($result);
    }

    public function createProduct($params)
    {
        $ch = curl_init(parent::v3url . '/products/create');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            'Authorization: Bearer ' . $this->accessToken,
            'Content-type: application/json'
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return json_decode($result);
    }

    public function updateProduct($params)
    {
        $url = parent::v3url . '/products/update?';
        $url .= http_build_query(['id' => $params['id'], 'sku' => $params['sku']]);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            'Authorization: Bearer ' . $this->accessToken,
            'Content-type: application/json'
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return json_decode($result);
    }

    public function updateProductUnsafe($params)
    {
        $url = parent::v3url . '/products/updateUnsafe?';
        $url .= http_build_query(['id' => $params['id'], 'sku' => $params['sku']]);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            'Authorization: Bearer ' . $this->accessToken,
            'Content-type: application/json'
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return json_decode($result);
    }

    public function changeStore($params)
    {
        $url = parent::v3url . '/products/changeStore?';
        $url .= http_build_query(['id' => $params['id'], 'sku' => $params['sku']]);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            'Authorization: Bearer ' . $this->accessToken,
            'Content-type: application/json'
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return json_decode($result);
    }

    public function removeProduct($params)
    {
        $url = parent::v3url . '/products/remove?';
        $url .= http_build_query(['id' => $params['id'], 'sku' => $params['sku']]);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            'Authorization: Bearer ' . $this->accessToken,
            'Content-type: application/json'
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return json_decode($result);
    }

    public function removeProductVariants($params)
    {
        $url = parent::v3url . '/products/removeVariants?';
        $url .= http_build_query(['id' => $params['id'], 'sku' => $params['sku']]);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            'Authorization: Bearer ' . $this->accessToken,
            'Content-type: application/json'
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return json_decode($result);
    }

    public function productColors()
    {
        $url = parent::v3url . '/productColors';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            'Authorization: Bearer ' . $this->accessToken,
            'Content-type: application/json'
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return json_decode($result);
    }

    public function productCategories()
    {
        $ch = curl_init(parent::v3url . '/productCategories');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            'Authorization: Bearer ' . $this->accessToken
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return json_decode($result);
    }


}