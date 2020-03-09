<?php

use \App\Model\Connexion, \App\Helpers\Text;

require "Model/Connexion.php";
require "Helpers/Text.php";


$r = new Connexion('refonte-site');
$pwd = md5($_POST['pwd']);
echo $pwd;
echo '<pre>';
$req = $r->q(
    "SELECT * FROM admin WHERE admin.login LIKE :login",
    array(
        array('login', $_POST['login'] , PDO::PARAM_STR),
    )
);
$req = Text::objectToArray($req)[0];

print_r($req);

echo '</pre>';

if ($req["password"] !== $pwd) {
    $error = "Erreur de mot de passe";
} else {
    $_SESSION['login'] = $req['login'];
    $_SESSION['pwd'] = $pwd;
    // header("Location: /admin");
}
