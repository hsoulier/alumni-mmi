<?php

use \App\Model\Connexion;

require "Model/Connexion.php";
// require "Helpers/Text.php";

$db = new Connexion('refonte-site');


if (isset($_POST['mail'], $_POST['pwd'])) {
    echo '<pre>';
    $pass = $db->q(
        "SELECT pwd FROM membres WHERE email LIKE :email",
        array(
            array('email', $_POST['mail'], PDO::PARAM_STR),
        )
    );
    $pass = get_object_vars($pass[0]);
    echo '</pre>';
    if ($pass['pwd'] !== $_POST['pwd']) {
        $error = "Mot de passe éronné";
    } else {
        echo 'On rentre dans la bonne cond';
        $pwd = $_POST['pwd'];
        $email = $_POST['mail'];
        $_SESSION['email'] = $email;
        $_SESSION['pwd'] = $pwd;
        print_r($_SESSION);
        header("Location: http://localhost:8000/directory");

        // echo "<script> location.href='/directory'; </script>";
        // exit;
    }

} else {
    echo 'erreur de base de données';
}
