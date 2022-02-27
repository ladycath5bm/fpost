<?php 

namespace App\Services\Payments;

use App\Contracts\GatewayContract;

class Placetopay implements GatewayContract
{
    private string $key;

    public function __construct()
    {
        //leer configuración de pasarela de pagos
        $this->key = config('payments.gateways.placetopay.key');
    }

    public function pay(): string        
    {
        return "Estamos pagandpo usando placetopay Key: {$this->key}";
    }
}