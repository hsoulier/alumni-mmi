<?php
session_start();
$title = "Annuaire";
print_r($_SESSION);
if (!isset($_SESSION['email'])) {
    // die(header('Location: /login'));
    echo 'variables de session pas construite';
}
?>

<div id="app">
    <h1>Annuaire des élèves</h1>
</div>