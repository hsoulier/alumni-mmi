<?php

require dirname(__DIR__) . '/vendor/autoload.php';

$faker = Faker\Factory::create('fr_FR');

$pdo = new PDO('mysql:dbname=refonte-site;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$pdo->exec('SET FOREIGN_KEY_CHECKS = 0');
$pdo->exec('TRUNCATE TABLE articles');
$pdo->exec('SET FOREIGN_KEY_CHECKS = 1');



for ($i = 1; $i < 25; $i++) {
    $nickName = utf8_encode($faker->firstName());
    $lastName = utf8_encode($faker->lastName());
    $pdo->exec("
        INSERT INTO articles SET typeArticle='Alumni Story', titleArticle='{$nickName} {$lastName}', textArticle='{$faker->paragraph($nbSentences = 4, $variableNbSentences = true)}', dateArticle='{$faker->date($format = 'Y-m-d',$max = 'now')} {$faker->time($format = 'H:i:s',$max = 'now')}', linkImg='{$faker->imageUrl(1000 , 1000, 'cats')}', linkThumb='{$faker->imageUrl(500, 500, 'cats')}'; 
    ");
}



