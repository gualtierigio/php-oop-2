<?php 

class User {

    use NameSurname;

    protected $age;
    protected $email;
    protected $password;
    protected $users = [];

    public function __construct($_email, $_password){

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

class CreditCard extends Users {

    use NameSurname;
        
    protected $cardNumber;
    protected $ccd;
    protected $expireDate;
    
    protected function __construct($_email, $_password, $name, $surname, $cardNumber, $ccd, $expireDate){

        $this->name = $_name;
        $this->surname = $_surname;
        $this->cardNumber = $_cardNumber;
        $this->ccd = $_ccd;
        $this->expireDate = $_expireDate;

        parent::__construct($_email, $_password);
    }

}

trait NameSurname {
    
    protected $name;
    protected $surname;
}

?>
