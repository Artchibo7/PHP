<?php
session_start();
require "src/classes/User.php";

if (!isset($_SESSION["conecté"]) && empty($_SESSION["user"])) {
    header("Location: conexion.php");
    exit();
}
$user = unserialize($_SESSION["user"]);

if (isset($_GET["section"])) {
    switch ($_GET["section"]) {
        case "compte";
            break 1;
        case "abonnements";
            $section = "abonnements";
            break 1;
        default;
            $section = null;
            break 1;
    }
} else {
    $section = null;
}
include "./includes/header.php";
?>

<main>
    <?php include "./includes/colonne.php"; ?>
    <div class="content">
        <?php if ($section == "compte") {
            include "./includes/section-compte.php";
        } else { ?>
            <p>Vous n'avez pas encore d'abonnements.</p>
            <?php } ?>;
    </div>
</main>