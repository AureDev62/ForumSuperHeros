<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


session_start();


require_once('./controllers/_mainController.php');



if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'home':
            home();
            break;

        case 'contact':
            contact();
            break;

        case 'signin':
            signin();
            break;


        case 'signup':
            signup();
            break;

        default:
            home();
    }
}
