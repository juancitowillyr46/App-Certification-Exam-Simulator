<?php declare(strict_types=1);

namespace App\Controllers;

use Slim\Http\Response;
use Slim\Http\ServerRequest;

final class HomeController
{
    // public function __invoke(ServerRequest $request, Response $response): Response
    // {
    //     return $response->withJson(['sucess' => true]);
    // }

    public function Index(ServerRequest $request, Response $response): Response{
        return $response->withJson(['sucess' => 'Welcome Api']);
    }

}