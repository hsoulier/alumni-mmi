<?php
session_start();

$title = "Connexion administration";
$error = null;
if (!empty($_POST['loginAdmin']) and !empty($_POST['pwdAdmin'])) {
    require '../src/admin.php';
}

?>

<div id="app">
    <h1>Panneau d'aministration</h1>
    <div class="form-admin">
        <form action="/admin/login" method="post" class="form-admin__form">
            <input type="text" class="pseudo" name="loginAdmin" required>
            <p class="form-admin__pseudo">Pseudo</p>
            <input type="password" class="pwd" name="pwdAdmin" required>
            <p class="form-admin__pwd">Mot de passe</p>
            <button type="submit" class='btn'>Se connecter</button>
        </form>
        <div>
            <?= $error ?>
        </div>
    </div>
</div>
