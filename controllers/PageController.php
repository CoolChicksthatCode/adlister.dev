<?php

require_once __DIR__ . '/../utils/helper_functions.php';
require_once __DIR__ . '/../utils/login_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        // TODO: put routes here
        case '/':
            $mainView = '../views/home.php';
            break;

        case '/ads':
            $mainView = '../views/ads/index.php';
            break;

        case '/items/show?id=':
            // $mainView = '../views/home.php'; <<FIX THIS <<
            break;

        case '/users/account?id=':
            // $mainView = '../views/home.php'; <<FIX THIS <<
            break;

        case '/signup':
            $mainView = '../views/users/signup.php'; 
            break;

        case '/login':
            userLoggedIn();
            attemptLogin();
            $mainView = '../views/users/login.php'; 
            break;

        case '/logout':
            logout();
            break;

        case '/items/create':
            $mainView = '../views/ads/create.php'; 
            break;

        case '/items/create':
            $mainView = '../views/ads/create.php'; 
            break;

        case '/items/edit?id=':
            // $mainView = '../views/ads/edit.php'; <<fix this!!
            break;

        default: // displays 404 if route not specified above
            $mainView = '../views/404.php';
            break;
    }

    $data['mainView'] = $mainView;

    return $data;
}

extract(pageController());