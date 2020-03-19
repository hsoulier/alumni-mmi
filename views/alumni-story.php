<?php
session_start();

use App\Model, App\Helpers\Text;

$title = "Articles";

$id = explode("-", $_SERVER['REQUEST_URI']);
$id = end($id);

require_once "../src/frontend.php";
$pageArticle = $r->q(
    "SELECT * FROM articles WHERE id LIKE :id",
    [
        [
            'id',
            $id,
            PDO::PARAM_STR
        ],
    ]
);

$pageArticle = Text::objectToArray($pageArticle[0]);

$pageArticle['dateArticle'] = explode(" ", $pageArticle['dateArticle']);

//  TRAITEMENT DATE
$date = str_replace('-', '/', date("d-m-Y", strtotime($pageArticle['dateArticle'][0])));
$time = date("H:i", strtotime($pageArticle['dateArticle'][1]));
?>



<div class="article">
    <div class="article__container">
        <div class="article__left">
            <div class="article__img">
                <img src="<?= $pageArticle['linkImg'] ?>" alt="">
            </div>
            <ul>
                <li>RS</li>
                <li>RS</li>
                <li>RS</li>
                <li>RS</li>
                <li>RS</li>
            </ul>

        </div>
        <div class="article__text">
            <h3>Alumni Story <?= $id ?></h3>
            <h6>Écrit à <?= $time . ' le ' . $date ?></h6>
            <h1><?= $pageArticle['titleArticle'] ?></h1>
            

            <p><?= $pageArticle['textArticle'] ?></p>
        </div>


    </div>
</div>