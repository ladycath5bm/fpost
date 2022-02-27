<?php 

return [
    'gateways' => [
        'placetopay' => [
            'key' => env('PLACETOPAY_SECRET_KEY'),
        ],
        'paypal' => [
            'key' => env('PAYPAL_SECRET_KEY'),
        ],
    ],
];