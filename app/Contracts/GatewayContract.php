<?php 

namespace App\Contracts;

interface GatewayContract
{
    public function pay(): string;
}