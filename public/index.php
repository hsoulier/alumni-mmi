<?php
header('content-type: text/html; charset=utf-8');
require "../vendor/autoload.php";

$router = new App\Router(dirname(__DIR__) . '/views');

$router
    ->get('/', 'home.php', 'Accueil')
    ->get('/admin', 'private/admin.php', "Administration")
    ->get('/admin/login', 'private/login.php', "Connexion administration")
    ->get('/contact', 'contact.php', "Contact")
    ->get('/articles', 'articles.php', "Articles")
    ->get('/about', 'about.php', "A propos")
    ->get('/alumni-story-[i:id]', 'alumni-story.php', "Connexion")
    ->get('/error', '404.php', "Erreur 404")
    ->run();



