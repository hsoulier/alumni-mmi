<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-signin-client_id" content="187747134274-7dvhinlpmcb5spe7pk4a7f6jmlf6dv1p.apps.googleusercontent.com">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <!-- JS -->
    <script defer src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script defer src="/js/index.js"></script>
    <title><?= $title ?? "Alumni MMI Toulon" ?></title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="header">
        <div class="header__container">
            <div class="header__img">
                <a href="/"><img src="/img/logo-alumni.png" alt="Logo alumni"></a>
            </div>
            <ul class="header__navLinks">
                <li><a href="/articles">Articles</a></li>
                <li><a href="/about">association</a></li>
                <li><a href="/contact">Contact</a></li>
                <li>
                    <div class="btn">
                        <a href="/login"><i class="far fa-user-circle"></i>Se connecter</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <?= $content ?>

    <!-- FOOTER -->
    <footer class="footer" data-aos="fade-in">
        <div class="footer__container">
            <div>
                <a href="/login" class="btn">Se connecter</a>
            </div>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/articles">Articles</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <form action="/emailing" method="post">
                <input type="email" name="mail" class="email" placeholder="S'abonner aux newsletter">
                <button type="submit"><i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </footer>
</body>

</html>