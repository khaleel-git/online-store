<?php

ini_set('allow_ulr_fopen', 1);
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/Login.php':
        require 'Login.php';
        break;
    case '/Register page/Register.php':
        require 'Register.php';
        break;
        case '/test.php':
            require 'test.php';
            break;
    default:
        http_response_code(404);
        echo @parse_url($_SERVER['REQUEST_URI'])['path'];
        exit('Not Found');
}

?>