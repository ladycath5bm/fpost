<?php 

namespace App\Actions;

use App\User;
use App\UserPasswordHash;

class CreateUserAction 
{
    public function createUser(): User 
    {
        //1 razon de cmabio: generación de usuario
        $user = new User();
        
        $user->setName('Leidy');
        $user->setAge(34);
        $user->setUsername('leidycath');
        $user->setEmail('leidy@gmail.com');
        //2 razon de cambio, implicacion de cifrar el password para almacenar en DB
        //$user->setPassword(bcrypt('leidy123'));
        //fdelegando responsabilidad del password a una action???
        //hash 
        $user->setPassword((new UserPasswordHash())->generate('password'));

        return $user;
    }
}
