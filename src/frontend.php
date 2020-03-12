<?php


use \App\Model\Connexion, \App\Helpers\Text;

require "Model/Connexion.php";
require "Helpers/Text.php";
require "constant.php";


$r = new Connexion('refonte-site');
$request = "SELECT *
FROM articles
ORDER BY dateArticle DESC
LIMIT 0, 2";
echo '<pre>';

$req = $r->q($request);
$lastArticles = [];

for ($i = 0; $i < count($req); $i++) {
    $lastArticles[$i] = Text::objectToArray($req[$i]);
}


echo '</pre>';



// ! EXEMPLE REQUETE AVEC PARAMETRES
// $DB->q(
//     "SELECT * FROM telephone WHERE number LIKE :num",
//     array(
//         array('num', '060%', PDO::PARAM_STR),
//     )
// );
