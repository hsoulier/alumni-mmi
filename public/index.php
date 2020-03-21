<?php
header('content-type: text/html; charset=utf-8');
require "../vendor/autoload.php";

$router = new App\Router(dirname(__DIR__) . '/views');

$router
    ->get('GET', '/', 'home.php', 'Accueil')
    ->get('GET', '/admin', 'private/admin.php',"administration")
    ->get('POST', '/admin', 'private/admin.php', "administration-form")
    ->get('POST', '/admin/login', 'private/login.php', "connexionAdmin-form")
    ->get('GET', '/admin/login', 'private/login.php', "Connexion administration")
    // ->get('GET', '/contact', 'contact.php', "Contact")
    ->get('GET', '/articles', 'articles.php', "Articles")
    ->get('GET', '/about', 'about.php', "A propos")
    ->get('GET', '/alumni-story-[i:id]', 'alumni-story.php', "article Alumni")
    ->get('GET', '/error', '404.php', "Erreur 404")
    ->get('GET', '/login', 'login.php', "connexion")
    ->get('POST', '/login', 'login.php', "connexion-form")
    ->get('GET', '/directory', 'directory.php', "annuaire")
    ->get('POST', '/directory', 'directory.php', "annuaire-form")
    ->run();



