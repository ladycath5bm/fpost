<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void 
    {
        User::create([
            'name' => 'Leidy',
            'email' => 'leidy@gmail.com',
            'password' => bcrypt('leidy123'),
            'email_verified_at' => now(),
        ]);
        
        $this->call(PostSeeder::class);
    }
}
