<?php

include "./user.php";
include "./Db.php";

if (
    !empty($_POST)
    && isset($_POST["username"])
    && isset($_POST["email"])
    && isset($_POST["password"])
    && isset($_POST["passwordConfirm"])
) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["passwordConfirm"];

    if ($password === "passwordConfirm") {
        $username = htmlspecialchars($username);
        $email = htmlspecialchars($email);
        $password = htmlspecialchars($password);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $newUser = new User($username, $email, $hashedPassword);
        $newDb = new Db("./db.csv");

        if($Db->checkIfCsvIsWriatble()){
            $csv = $Db->openCsv();
            $Db->writeInToCsv($csv, $newUser->convertToArray());

            $Db->closeCsv($csv);
            header("Location: index.php");
            exit;
        }
    } else {
        // EROOR/Redirection
    }
}
