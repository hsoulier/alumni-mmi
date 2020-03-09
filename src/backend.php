<?php

use \App\Model\Connexion, \App\Helpers\Text;

require "Model/Connexion.php";
require "Helpers/Text.php";

$r = new Connexion('refonte-site');

$nbArticles = $r->q("SELECT * FROM articles");
$req = $r->q(
    "SELECT * FROM articles WHERE typeArticle LIKE :type", 
    [
        [
            'type',
            'Alumni Story'
            // PDO::PARAM_STR
        ]
    ]
);
$listArticles = [];

for ($i = 0; $i < count($req); $i++) {
    Text::utf8_string_array_encode($req[$i]);
    $listArticles[$i] = Text::objectToArray($req[$i]);
}