<?php

require_once __DIR__ . '/../utils/helper_functions.php';
require_once __DIR__ . '/../utils/login_functions.php';
require_once __DIR__ . '/../utils/ad_functions.php';

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
            // Ads::all();
            $mainView = '../views/ads/index.php';
            break;

        case '/items/show':
            // header('Location: /items/show');
            $mainView = '../views/ads/show.php'; 
            break;

        case '/users/account' :
            $mainView = '../views/users/account.php'; 
            break;

        case '/users/edit' :
            updateAccountInfo();
            $mainView = '../views/users/edit.php'; 
            break;

        case '/users/create':
            userSignUp();
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
            addAnItem();
            $mainView = '../views/ads/create.php'; 
            break;

        // case '/items/create':
        //     $mainView = '../views/ads/create.php'; 
        //     break;


        case '/items/edit':
            editItem();   
             $mainView = '../views/ads/edit.php';

            // if(isset($_SESSION['IS_LOGGED_IN'])) {
            //  editItem();   
            //  $mainView = '../views/ads/edit.php';
            // } else {
            //     header('Location: /login');
            // }
            break;


        default: // displays 404 if route not specified above
            $mainView = '../views/404.php';
            break;
    }

    $data['mainView'] = $mainView;

    return $data;
}

extract(pageController());