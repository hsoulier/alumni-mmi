<?php
session_start();
// session_destroy();
$title = "Connexion administration";
$error = null;
if (!empty($_POST['login']) and !empty($_POST['pwd'])) {
    require '../../src/Model/admin.php';
}

?>





<div class="form-admin">
    <form action="./login" method="post" class="form-admin__form">
        <input type="text" class="pseudo" name="login" required>
        <p class="form-admin__pseudo">Pseudo</p>
        <input type="password" class="pwd" name="pwd" required>
        <p class="form-admin__pwd">Mot de passe</p>
        <button type="submit" class='btn'>Se connecter</button>
    </form>
    <div>
        <?= $error ?>
    </div>
</div>












<?php




// $_SESSION['login'] = 'admin';
// $_SESSION['pwd'] = 'admin';

// header('Location: refonte-alumni/admin');
// header("Location: /refonte-alumni/admin");
