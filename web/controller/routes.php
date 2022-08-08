<?php
$routes = [
    // Routes de la méthode GET (typiquement afficher une page)
    'GET' => [
        '/' => 'views/homepage.php',
        '/home' => 'views/homepage.php',
        '/error' => 'views/error.php',
        '/about' => 'views/about.php',
        '/add_hike' => 'views/admin/add_hike.php',
        '/my_hikes' => 'views/admin/my_hikes.php',
        '/update_hike' => 'views/admin/update_hike.php',
        '/delete_hike' => 'views/admin/delete_hike.php',
        '/hike' => 'views/hike.php',
        '/test' => 'controller/test.php',
        '/user' => 'controller/User.php',
        '/deleteOneHike' => 'controller/admin/deleteHike.php',
        '/disconnect' => 'views/admin/logout.php',
        '/login' => 'views/admin/login.php',
        '/deleteOneUser' => 'controller/admin/deleteUser.php',
        '/update_user' => 'views/admin/updateUserByAdmin.php',
        '/delete_user' => 'views/admin/delete_user.php',
        '/updateUser' => 'views/admin/updateUser.php',
        '/account' => 'views/admin/account.php',
        '/admin' => 'controller/admin/admin.php',
        '/mail' => 'controller/Email.php',
        '/viewsUser' => 'views/admin/users.php',
        '/register' => 'views/register.php',
        '/confirmMail' => 'controller/confirmMail.php',
        '/searchviews' => 'views/Search.php',
    ],
    // Routes de la méthode POST
    'POST' => [
        '/user' => 'controller/User.php',
        '/login_submit' => 'views/admin/login.php',
        '/add_hike' => 'controller/admin/addHikes.php',
        '/admin' => 'controller/admin/admin.php',
        '/updateHike' => 'controller/admin/updateHikes.php',
        '/updateUser' => 'controller/admin/update_User.php',
        '/connexion' => 'controller/admin/connexion.php',
        '/RegisterForm' => 'controller/register.php',
        '/search' => 'controller/search.php',

    ],
];