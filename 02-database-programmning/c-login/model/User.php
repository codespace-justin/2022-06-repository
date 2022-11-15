<?php

class User {

    // ===================================== Fields =========================================
    
    private $id;
    private $username;
    private $password;
    private $email;
    private $role;

    // ===================================== Constructor =========================================
    
    public function __construct($username,$password,$email,$role) {

        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;

        $this->id = $this->generateId();
    }

    // ===================================== Methods =========================================

    private function generateId() {

        $randomNumber = rand(10000, 90000);
        $id = md5($randomNumber);

        switch ($this->role) {

            case 'admin':
                $adminCode = "A#";
                return $adminCode . $id;
                break;
            
            default:
                $customerCode = "C#";
                return $customerCode . $id;
                break;
        }
    }

    // ===================================== Get & Set =========================================

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


    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}