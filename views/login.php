<?php
session_start();
$title = "Se connecter";

$error = null;


if (isset($_POST['signPwd'], $_POST['signPwdConf']) && $_POST['signPwd'] !== $_POST['signPwdConf']) {
    $error = "Mauvais mot de passe";
} else {
    if ((isset($_POST['signMail'], $_POST['signPwd'], $_POST['signPwdConf']) ||
        isset($_POST['mail'], $_POST['pwd']))) {
        require_once '../src/login.php';
    }
}


?>
<script src="https://apis.google.com/js/platform.js" async defer></script>

<div id="app" class="login-signin">
    <div class="login-signin__container ">
        <div class="login-signin__left">
            <form action="/login" method="post" class="login-signin__form">
                <h1>Se connecter</h1>
                <!-- <div class="social-connect">
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>

                </div> -->
                <p class="login-signin__mail">Adresse mail</p>
                <input type="email" class="mail" name="mail" required>
                <p class="login-signin__pwd">Mot de passe</p>
                <input type="password" class="pwd" name="pwd" required>
                <button type="submit" class='btn'>Se connecter</button>
            </form>
        </div>
        <div class="login-signin__right">
            <form action="/login" method="post">
                <h1>S'inscrire</h1>
                <p class="login-signin__mail">Adresse mail</p>
                <input type="email" class="mail" name="signMail" required>
                <p class="login-signin__pwd">Mot de passe</p>
                <input type="password" class="pwd" name="signPwd" required>
                <p class="login-signin__pwd">Confirmer votre mot de passe</p>
                <div class="error"><?= $error ?></div>
                <input type="password" class="pwd" name="signPwdConf" required>
                <button type="submit" class='btn'>S'inscrire</button>
            </form>
        </div>
    </div>
</div>



<!-- client ID :  187747134274-7dvhinlpmcb5spe7pk4a7f6jmlf6dv1p.apps.googleusercontent.com  -->
<!-- clientSecreet : m0Gby5AMZToLe6VnMQrAsvNy -->