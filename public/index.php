<?php
require "../vendor/autoload.php";

$router = new App\Router(dirname(__DIR__) . '/views');

$router
    ->get('/', 'home', 'Accueil')
    ->get('/admin', 'private/admin', "Administration")
    ->get('/admin/login', 'private/login', "Connexion administration")
    ->get('/contact', 'contact', "Contact")
    ->get('/articles', 'articles', "Articles")
    ->get('/about', 'about', "A propos")
    // ->get('/error', '404', "Erreur 404")
    ->run();



