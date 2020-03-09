<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <script defer src="/js/index.js"></script>
    <title><?= $title ?? "Alumni MMI Toulon" ?></title>
</head>

<body>
    <nav class="header">
        <div class="header__container">
            <div class="header__img">
                <a href="/"><img src="/img/logo-alumni.png" alt="Logo alumni"></a>
            </div>
            <ul class="header__navLinks">
                <li><a href="/articles">Articles</a></li>
                <li><a href="/about">A propos</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/login" class="btn"><i class="far fa-user-circle"></i>Se connecter</a></li>
            </ul>
        </div>

    </nav>

    <?= $content ?>

    <footer>
        <ul>
            <li><a href="">Accueil</a></li>
            <li><a href="">Articles</a></li>
            <li><a href=""></a></li>
        </ul>

        <a href="/admin">administration</a>
    </footer>


</body>

</html>