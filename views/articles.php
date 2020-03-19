<?php
session_start();

$title = "Articles";

require_once "../src/backend.php";

?>

<div id="app" class="all-articles">
    <h1>Articles</h1>
    <div class="dash-article-card">
        <?php foreach ($listArticles as $article) : ?>
            <div class="dash-article-card__card" data-aos="fade-in">
                <div class="dash-article-card__img">
                    <img src="<?= $article['linkThumb'] ?>" alt="">
                </div>

                <h4 class="dash-article-card__title"><?= $article['titleArticle'] ?></h4>
                <p><?= substr($article['textArticle'], 0, 100) . "..." ?></p>
                <div>
                    <a href="/alumni-story-<?= $article['id'] ?>" class="btn">Découvrir</a>
                </div>

            </div>
        <?php endforeach ?>
    </div>
</div>