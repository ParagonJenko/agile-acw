<?php 
namespace appointmentSystem;

session_start();

class User {
    public $role;
    
    public $fake_db = array("id" => 1, "username" => "291039", "password" => '$2y$10$et8e3T.vK33s9pEHuv0fm.EPp4MqkpDxNAWjkZ7micYs3lINAYXO2', "role" => "staff");

    public function login($username, $password){
    
        //sql_query = "SELECT * FROM users WHERE username = ?";

        if($this->fake_db['username'] == $username){
            if(password_verify($password, $this->fake_db['password'])){
                $_SESSION["logged_in"] = true;
                return true;
            }
        }

        return false;
    }

    public function verifyLoggedIn(){
        return ($_SESSION["logged_in"]) ? true : false;
    }

    public function logout(){
        $_SESSION["logged_in"] = false;
    }

    public function changePassword($user_id, $old_password, $new_password){

        if(password_verify($old_password, $this->fake_db['password'])){
            $password = password_hash($new_password, PASSWORD_DEFAULT);
            // UPDATE users SET password = ?
        }
    }

    /*
    TODO: Has lack of any way to authenticate user per spec. Maybe just reset to a basic password, or request they go to IT and verify identity?
    */
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

class SeniorManagement extends User {
    /*
    TODO: Will host all call functions to retrieve data for SM.
    */
}

?>