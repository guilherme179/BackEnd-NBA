<?php

namespace App\Models;

final class UsersModel {
   
    /** 
    * @var int
    */
    private $id;
    
    /** 
    * @var string
    */
    private $user;
    
    /** 
    * @var string
    */
    private $password;

    /** 
    * @return int
    */
    public function getId(): int{
        return $this->id;
    }

    /** 
    * @return string
    */
    public function getUser(): string{
        return $this->user;
    }

    /** 
    * @return string
    */
    public function getPassword(): string{
        return $this->password;
    }

    /** 
    * @param int $id
    * @return int
    */
    public function setId(int $id): UsersModel{
        $this->id = $id;
        return $this;
    }

    /** 
    * @param string $user
    * @return string
    */
    public function setUser(string $user): UsersModel{
       $this->user = $user;
       return $this;
    }

    /**
    * @param string $password  
    * @return string
    */
    public function setPassword(string $password): UsersModel{
         $this->password = $password;
         return $this;
    }
}