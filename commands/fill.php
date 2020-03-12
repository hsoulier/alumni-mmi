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
    $pdo->exec("
        INSERT INTO articles SET typeArticle='Alumni Story', titleArticle='{$faker->firstName()} {$faker->lastName()}', textArticle='{$faker->paragraph($nbSentences = 4, $variableNbSentences = true)}', dateArticle='{$faker->date($format = 'Y-m-d',$max = 'now')} {$faker->time($format = 'H:i:s',$max = 'now')}', linkImg='article-$i.png', linkThumb='article-thumb-$i.png' 
    ");
}



