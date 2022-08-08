<?php
$routes = [
    // Routes de la méthode GET (typiquement afficher une page)
    'GET' => [
        '/' => '../view/homepage.php',
        '/home' => '../view/homepage.php',
        '/error' => '../view/error.php',
        '/about' => '../view/about.php',
        '/add_hike' => '../view/admin/add_hike.php',
        '/my_hikes' => '../view/admin/my_hikes.php',
        '/update_hike' => '../view/admin/update_hike.php',
        '/delete_hike' => '../view/admin/delete_hike.php',
        '/hike' => '../view/hike.php',
        '/test' => '../controller/test.php',
        '/user' => '../controller/User.php',
        '/deleteOneHike' => '../controller/admin/deleteHike.php',
        '/disconnect' => '../view/admin/logout.php',
        '/login' => '../view/admin/login.php',
        '/deleteOneUser' => '../controller/admin/deleteUser.php',
        '/update_user' => '../view/admin/updateUserByAdmin.php',
        '/delete_user' => '../view/admin/delete_user.php',
        '/updateUser' => '../view/admin/updateUser.php',
        '/account' => '../view/admin/account.php',
        '/admin' => '../controller/admin/admin.php',
        '/mail' => '../controller/Email.php',
        '/viewUser' => '../view/admin/users.php',
        '/register' => '../view/register.php',
        '/confirmMail' => '../controller/confirmMail.php',
        '/searchView' => '../view/Search.php',
    ],
    // Routes de la méthode POST
    'POST' => [
        '/user' => '../controller/User.php',
        '/login_submit' => '../view/admin/login.php',
        '/add_hike' => '../controller/admin/addHikes.php',
        '/admin' => '../controller/admin/admin.php',
        '/updateHike' => '../controller/admin/updateHikes.php',
        '/updateUser' => '../controller/admin/update_User.php',
        '/connexion' => '../controller/admin/connexion.php',
        '/RegisterForm' => '../controller/register.php',
        '/search' => '../controller/search.php',

    ],
];