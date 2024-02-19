<?php
require_once "./user.php";
include "./Db.php";

if(!empty($_POST)
&& isset($_POST["username"])
&& isset($_POST["password"])
){
    $username = $_POST["username"];
    $password = $_POST["password"];}
   
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    $newDbUser = new DbUser("./db.csv")
    $registeredUsers = $newDbUser->readFromCsv();

    foreach ($registeredUsers as $registeredUser) {
        $registeredUserUsername = $registeredUser[0]; 
        $registeredUserEmail = $registeredUser[1];
        $registeredUserPassword = $registeredUser[2];

        if($username === $registeredUserUsername 
        && password_verify($password, $registeredUserPassword)){
            $authenticatedUser = new User($registeredUserUsername, $registeredUserEmail, $registeredUserPassword);
            header("Location: index.php?successSignIn=1&username=" . $authenticatedUser->getUsername());
            exit;
        }
    }
?>