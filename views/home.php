<?php
session_start();

use App\Model;

require_once "../src/frontend.php";

$i = 1;

?>

<div id="app">
    <div class="carrousel">
        <div class="carrousel__container">
            <div class="carrousel__item item1">
                <img src="img/carrousel-alumni-item1.png" alt="">
                <p>Bienvenue sur le site <br>Alumni MMI Toulon</p>
            </div>
            <div class="carrousel__item item2">
                <img src="img/carrousel-alumni-item2.png" alt="">
                <p>L'annuaire des anciens de MMI</p>
            </div>
            <div class="carrousel__item item3">
                <img src="img/carrousel-alumni-item3.png" alt="">
            </div>
        </div>
    </div>
    <div class="lastArticles">
        <div class="lastArticles__container">
            <h1 data-aos="fade-in">Les derniers articles</h1>
            <?php foreach ($lastArticles as $article) : ?>
                <div class="lastArticles__article article<?= $i ?>" data-aos="fade-up">
                    <div class="lastArticles__img">
                        <img src="<?= $article['linkThumb'] ?>" alt="">
                    </div>
                    <div class="lastArticles__text">
                        <h3><?= $article['typeArticle'] ?></h3>
                        <h1><?= $article['titleArticle'] ?></h1>
                        <p><?= substr($article['textArticle'], 0, 100) . "..." ?></p>
                        <a href="/alumni-story-<?= $i ?>" class="btn">Voir la story</a>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach ?>
        </div>
    </div>
</div>