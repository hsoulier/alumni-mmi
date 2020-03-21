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
    <div class="directory">
        <div class="directory__container">
            <div class="directory__navName">
                <h3>Séléction par lettre</h3>
                <div class="directory__letters">
                    <?php foreach (range('A', 'Z') as $l) : ?>
                        <a href="#"><?= $l ?></a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>