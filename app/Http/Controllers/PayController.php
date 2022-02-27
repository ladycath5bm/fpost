<?php

namespace App\Http\Controllers;

use App\Services\Payments\GatewayFactory;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function pay(string $gateway): string  
    {
        $gateway = GatewayFactory::make($gateway);
        return $gateway->pay();
    }
}
