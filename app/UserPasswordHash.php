<?php 

namespace App;

use Illuminate\Support\Facades\Hash;

class UserPasswordHash
{
    public function generate(string $password): string 
    {
        return Hash::make($password);
    }
}
