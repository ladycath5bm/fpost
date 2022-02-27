<?php 

namespace App\Services\Payments;

use App\Contracts\GatewayContract;
use InvalidArgumentException;

class GatewayFactory
{
    public static function make(string $gateway): GatewayContract
    {
        switch ($gateway) {
            case 'placetopay':
                return new Placetopay();
            case 'paypal':
                return new Paypal();
            default:
                throw new InvalidArgumentException("Pasarela no soportada");
        }
    }
}
