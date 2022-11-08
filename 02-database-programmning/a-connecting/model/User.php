<?php

class User {
    
    private $id;
    private $username;
    private $password;
    private $email;
    private $role;
    
    public function __construct($username,$password,$email,$role) {

        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;

        $this->id = $this->generateId();
    }

    private function generateId() {

        $randomNumber = rand(10000, 90000);
        $id = md5($randomNumber);

        switch ($this->role) {

            case 'admin':
                $adminCode = "A#";
                return $adminCode . $id;
                break;
            
            case 'customer':
                $customerCode = "A#";
                return $customerCode . $id;
                break;
            
            default:
                return "error in creating user id";
                break;
        }
    }


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }


    function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}