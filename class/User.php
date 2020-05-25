<?php 
namespace appointmentSystem;

class User {
    public $role;

    public function login($username, $password){

    }

    public function verifyLoggedIn(){
        return ($tmp) ? true : false;
        
    }

    public function logout(){

    }

    public function changePassword(){

    }

    public function forgotPassword(){

    }

    public function resetPassword(){

    }
}

class Availability extends User{
    public function setAvailability(){

    }

    public function getAvailability(){
        
    }
}

?>