<?php 

namespace App\Services\Payments;

use App\Contracts\GatewayContract;

class Paypal implements GatewayContract
{
    private string $key;

    public function __construct()
    {
        //leer configuración de pasarela de pagos
        $this->key = config('payments.gateways.paypal.key');
    }

    public function pay(): string        
    {
        return "Estamos pagandpo usando paypal Key: {$this->key}";
    }
}