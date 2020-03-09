<?php
session_start();

if (!isset($_SESSION['login']) and !isset($_SESSION['pwd'])) {
    header("Location: /admin/login");
    die();
}
require '../../model/backend.php';

if (isset($_POST['log-out'])) {
    logOut();
}

function logOut()
{
    session_destroy();
    header("Location: /");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <script defer src="/js/index.js"></script>
    <script defer src="/js/admin.js"></script>
    <title>Tableau de bord</title>
    <style>
        body {
            height: 100vh;
            overflow: hidden
        }
    </style>
</head>

<body>
    <div id="dashboard">

        <aside class="leftNav-admin">
            <div class="leftNav-admin__container">
                <div class="leftNav-admin__logo">
                    <a href="/refonte-alumni/"><img src="/refonte-alumni/public/img/logo-alumni.png" alt="Logo alumni"></a>
                    <p>Bonjour <br><?= $_SESSION['login'] ?></p>
                </div>
                <ul>
                    <li data-link="dash-infos"><i class="fas fa-home"></i>Dashboard</li>
                    <li data-link="dash-article" class="opened"><i class="fas fa-newspaper"></i> Articles</li>
                    <li data-link="dash-mess"><i class="fas fa-envelope"></i>Messages</li>
                </ul>
                <div>
                    <form action="admin" method="post">
                        <button type="submit" name="log-out"><i class="fas fa-sign-out-alt"></i>Déconnexion</button>
                    </form>
                </div>
            </div>

        </aside>

        <div class="dash-infos">
            <div class="dash-infos__container">
                <div class="dash-infos__stats">
                    Page Accueil
                </div>
            </div>
        </div>

        <div class="displayed dash-article">
            <div class="dash-article__container">
                <div class="dash-article__infos">
                    <?= count($nbArticles) ?> Articles sur le site
                </div>
                <h3>Alumni Story</h3>
                <div class="dash-article-card">
                    <?php foreach ($listArticles as $article) : ?>
                        <div class="dash-article-card__card">
                            <h4 class="dash-article-card__title"><?= $article['titleArticle'] ?></h4>
                            <p><?= substr($article['textArticle'], 0, 100) . "..." ?></p>
                            <div><a href="/refonte-alumin/articles?id=<?= $article['id'] ?>">Voir</a><span><i class="fas fa-edit"></i><i class="fas fa-trash"></i></span></div>
                        </div>
                        
                        <div class="dash-article-card__card">
                            <h4 class="dash-article-card__title"><?= $article['titleArticle'] ?></h4>
                            <p><?= substr($article['textArticle'], 0, 100) . "..." ?></p>
                            <div><a href="/refonte-alumin/articles?id=<?= $article['id'] ?>">Voir</a><span><i class="fas fa-edit"></i><i class="fas fa-trash"></i></span></div>
                        </div>
                    <?php endforeach ?>
                </div>

            </div>
        </div>

        <div class="dash-mess">
            <div class="dash-mess__container">
                Page message
            </div>
        </div>

    </div>
</body>

</html>