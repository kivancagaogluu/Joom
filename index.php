<?php
/**
 * Author: Kıvanç Ağaoğlu
 * Web: https://kivancagaoglu.com
 * Mail: info@kivancagaoglu.com
 * Skype: kivancagaoglu
 * Github: https://github.com/kivancagaogluu/
 *
 */

require_once __DIR__ . '/vendor/autoload.php';

use bluntk\Joom;

$config = [
    'client_id' => 'xxx',
    'client_secret' => 'xxx',
    'grant_type' => 'authorization_code',
    'code' => 'xxx',
    'redirect_uri' => 'https://xxx',
    'refresh_token' => 'xx',
    'access_token' => 'xx',
];

$joom = new Joom([
    'clientId' => $config['client_id'],
    'clientSecret' => $config['client_secret'],
    'refreshToken' => $config['refresh_token'],
    'accessToken' => $config['access_token'],
]);

$products = $joom->product()->retrieveProducts();

$product = [
    'storeId' => '628cb5389ed0e4c369f896d8',
    'attributes' => [
        ['key' => 'cvd', 'value' => '22']
    ],
    'mainImage' => 'https://example.com/1.jpg',
    'name' => 'Test',
    'sku' => (string) rand(),
    'variants' => [[
        'attributes' => [
            ['material' => '90% cotton, 10% polyester']
        ],
        'currency' => 'EUR',
        'declaredValue' => '4.32',
        'price' => '4.32',
        'sku' => (string) rand()
    ]]
];

$updateProduct = [
    'sku' => 'tst-1',
    'storeId' => '628cb5389ed0e4c369f896d8',
    'attributes' => [
        ['key' => 'cvd', 'value' => '22']
    ],
    'mainImage' => 'https://example.com/1.jpg',
    'name' => 'Testtt',
//    'sku' => (string) rand(),
];

$updateProductUnsafe = [
    'sku' => 'tst-1',
    'remove' => 1,
    'storeId' => '3'
];

$removeProduct = [
    'sku' => 'tst-1',
    'reason' => 'stopSelling',
];

$createProduct = $joom->product()->productColors();

print_r($createProduct);
