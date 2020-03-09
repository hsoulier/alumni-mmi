<?php
// ! ANCIEN ROUTER
// header('Content-type: text/html; charset=utf-8');
// mb_internal_encoding('UTF-8');
// mb_http_output('UTF-8');
// mb_http_input('UTF-8');
// mb_regex_encoding('UTF-8');



// require "model/frontend.php";
// require "model/constant.php";

// // ? $_SERVER["REQUEST_URI"] -> url rentré
// $url = $_SERVER["REQUEST_URI"];
// $delLater = "/refonte-alumni";


// switch ($url) {
//     case $delLater:
//         require __DIR__ . '/view/index.php';
//         break;

//     case "$delLater/":
//         require __DIR__ . '/view/index.php';
//         break;

//     case "$delLater/articles":
//         $title = "Article | Alumni MMi";
//         require __DIR__ . '/view/articles.php';
//         break;

//     case "$delLater/about":
//         $title = "A Propos | Alumni MMi";
//         require __DIR__ . '/view/about.php';
//         break;

//     case "$delLater/contact":
//         $title = "Contact | Alumni MMi";
//         require __DIR__ . '/view/contact.php';
//         break;

//     case "$delLater/admin":
//         $title = "Administration | Alumni MMi";
//         require __DIR__ . '/view/private/admin.php';
//         break;

//     case "$delLater/admin?login":
//         $title = "Connexion Administration | Alumni MMi";
//         require __DIR__ . '/view/private/login.php';
//         break;

//     default:
//         http_response_code(404);
//         $title = "Page Introuvable | Alumni MMi";
//         require __DIR__ . '/view/404.php';
//         break;
// }

// require "view/layout/footer.php";
echo 'Ancien router';