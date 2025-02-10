<?php

abstract class User {
    protected $id;
    protected $email;
    protected $name;
    protected $role;

    public function __construct($id, $email, $name, $role) {
        $this->id = $id;
        $this->email = $email;
        $this->name = $name;
        $this->role = $role;
    }

    public function getRole() {
        return $this->role;
    }

    public function getDetails() {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'name' => $this->name,
            'role' => $this->role
        ];
    }

    abstract public function login($email, $password);
    abstract public function logout();
    public function register($email, $password);
}

