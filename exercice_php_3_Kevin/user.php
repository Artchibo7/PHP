<!-- étape_0_.md -->
<!-- étape_0_.md -->
<!-- étape_0_.md -->
<!-- étape_0_.md -->

<?php
class User{
    private $username;
    private $email;
    private $password;

    public function __construct($username, $email, $password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getUsername(){
        return $this->username;
    }
    public function setUsername($username){
        $this->username = $username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }

    public function convertToArray(){
        return [$this->username, $this->email, $this->password];
        // $tableau = [$this->getUsername, $this->getEmail, $this->getUgetPasswordrsername]
    }
}
?>