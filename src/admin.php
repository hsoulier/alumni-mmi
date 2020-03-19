<?php

use \App\Model\Connexion, \App\Helpers\Text;

require_once "Model/Connexion.php";
require_once "Helpers/Text.php";


$r = new Connexion('refonte-site');
$pwd = md5($_POST['pwdAdmin']);
echo $pwd;
echo '<pre>';
$req = $r->q(
    "SELECT * FROM admin WHERE admin.login LIKE :login",
    array(
        array('login', $_POST['loginAdmin'] , PDO::PARAM_STR),
    )
);
$req = get_object_vars($req[0]);
print_r($req);

echo '</pre>';

if ($req['password'] !== $pwd) {
    $error = "Erreur de mot de passe";
} else {
    $_SESSION['loginAdmin'] = $req['login'];
    $_SESSION['pwdAdmin'] = $pwd;
    header("Location: /admin");
}
