<?php 

class User {

    protected $name;
    protected $surname;
    protected $age;
    protected $email;
    protected $password;
    protected $users = [];

    protected function __construct($_email, $_password ){

        $this->email = $_email;
        $this->password = $_password;
    }

    protected function logIn(){
        if(isset($users[$_email]) && isset($users[$_password])){
            echo 'welcome back ' . $name;
        }else{
            echo 'you must subscribe to log in our shop ';
        }
    }

    protected function subscribe(){
        if(isset($users[$_email])){
            echo 'this email is already in use';
        }else{
            $users[] = $_email;
            echo 'welcome in our website ' . $name;
        }
    }
}

?>
