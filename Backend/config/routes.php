<?php declare(strict_types=1);

use App\Middleware\JwtMiddleware;
use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {

    $app->get('/', '\App\Controllers\HomeController:Index');

    $app->group('/api', function (RouteCollectorProxy $group) {
        $group->group('/users', function (RouteCollectorProxy $group) {
            $group->get('', '\App\Controllers\UserController:ReadAll');
            $group->post('', '\App\Controllers\UserController:Post');
            $group->get('/{id}', '\App\Controllers\UserController:ReadById');
            $group->put('/{id}', '\App\Controllers\UserController:Update');
            $group->delete('/{id}', '\App\Controllers\UserController:Delete');
        });
        $group->group('/security', function (RouteCollectorProxy $group) {
            $group->post('/signin', '\App\Services\RestApi\Controllers\SecurityController:SignIn');
            $group->post('/signup', '\App\Services\RestApi\Controllers\SecurityController:SignUp');
        });
    });
    // ->add(JwtMiddleware::class);

};