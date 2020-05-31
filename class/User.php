<?php 
namespace appointmentSystem;

require_once("DB.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

use PDO;
/*
User DB

Table Name: users
id - int, pk
username = varchar(255)
password = varchar(255)
role = varchar(20)
locked_for_verification = bool

*/


class User {
    public $role;

    public function login($username, $password){
        $db = new DB;
        $query = $db->preparedQuery("SELECT * FROM users WHERE username = ?", array($username))->fetch(PDO::FETCH_OBJ);

        if($query == null) {
            return false;
        }
        else {
            if($query->username == $username){
                if(password_verify($password, $query->password)){
                    $_SESSION['username'] = $query->username;
                    return true;
                } else {
                    return false;
                }
            }
        }
        return false;
    }

    public function redirectUsersToIndexs($root){
        switch($this->verifyRole()){
            case "smm":
                header("Location: $root/pages/staff/smm.php");
                break;
            case "hwb":
                header("Location: $root/pages/staff/index.php");
                break;
            case "ast":
                header("Location: $root/pages/staff/index.php");
                break;
            case "student":
                header("Location: $root/pages/student/index.php");
                break;
            case "professor":
                header("Location: $root/pages/staff/index.php");
                break;
        }
    }

    public function verifyLoggedIn(){ 
        return (isset($_SESSION['username'])) ? true : false;
    }

    public function verifyRole(){
        $db = new DB;
        $query = $db->preparedQuery("SELECT role FROM users WHERE username = ?", array($_SESSION['username']))->fetch(PDO::FETCH_OBJ);

        return ($query->role);
    }

    public function logout(){
        session_unset();
        session_destroy();
        header("Location: user/login.php");
    }

    public function changePassword($new_password){
        $password = password_hash($new_password, PASSWORD_DEFAULT);
        $db = new DB;
        $query = $db->preparedQuery("UPDATE users SET password = ? WHERE username = ?", array($new_password, $_SESSION['username']));

        if(!null){
            return true;
        }
        
        return false;
    }

    /*
    TODO: Has lack of any way to authenticate user per spec. Maybe just reset to a basic password, or request they go to IT and verify identity?
    */
    public function forgotPassword(){
        // Send alert to go to Senior Management to be unlocked.

        // UPDATE users SET locked_for_verification = true
    }
}

class Availability extends User{
    public function setAvailability(){

    }

    public function getAvailability(){
        
    }
}

class SeniorManagement extends User {
    public function unlockAccount($account_id){
        
    }

    /*
    TODO: Will host all call functions to retrieve data for SM.
    */
}

?>