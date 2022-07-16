# Joom
Joom API V3 PHP Client

## Initiating Library


```php

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

```

## Product Service

### Retrieve Products
```php

$products = $joom->product()->retrieveProducts();

```

### Create Product
```php

$product = [
    'storeId' => 'xx',
    'attributes' => [
        ['key' => 'cvd', 'value' => '22']
    ],
    'mainImage' => 'https://www.example.com/image/1.jpg',
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

$products = $joom->product()->createProduct($product);

```

### Remove Product
```php

$removeProduct = [
    'sku' => 'tst-1',
    'reason' => 'stopSelling',
];

$products = $joom->product()->removeProduct($product);

```

### Product Colors and Categories

```php

$colors = $joom->product()->productColors();

$categories = $joom->product()->productCategories();

```

I created this library because of my own needs and that is only product service. Feel free to contribute
