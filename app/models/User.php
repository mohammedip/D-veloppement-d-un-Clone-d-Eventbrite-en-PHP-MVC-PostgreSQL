<?php


namespace App\models;


require_once __DIR__.'/HasLogin.php';
require_once __dir__.'/HasLogout.php';
require_once __dir__.'/HasRegister.php';



class User {
    protected $id;
    protected $email;
    protected $name;
    protected $role;


    use LoginTrait;
    use LogoutTrait;
    use RegisterTrait;

    // public function __construct($id, $email, $name, $role) {
    //     $this->id = $id;
    //     $this->email = $email;
    //     $this->name = $name;
    //     $this->role = $role;
    // }

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

}

