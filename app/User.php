<?php 

namespace App;

class User 
{
    private string $name;
    private string $email;
    private string $username;
    private string $password;
    private int $age;

    public function setName(string $name): self
    {
        $this->name= $name;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
    }

    public function setUsername(string $username): self 
    {
        $this->username = $username;
    }

    public function setPassword(string $password): self 
    {
        $this->password = $password;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;
    }
}
