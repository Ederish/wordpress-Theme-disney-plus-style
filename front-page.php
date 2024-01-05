<?php
require_once 'vendor\bramus\router\src\Bramus\Router\Router.php';
require_once 'vendor\autoload.php';

use Bramus\Router\Router;

$router = new Router();

$router->get('/Brand', function ($brand) {
    get_headers();
    get_template_part('includes\BrandPage');
    get_footer();
});

$router->get('/Search', function () {
    get_headers();
    get_template_part('includes\SearchPage');
    get_footer();
});

$router->get('/', function () {
    get_header();
    get_template_part('includes\Home');
    get_footer();
});

$router->run();