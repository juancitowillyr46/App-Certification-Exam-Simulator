<?php declare(strict_types=1);

namespace App\Service\RestApi\Controllers;

use Slim\Http\Response;
use Slim\Http\ServerRequest;

final class UserController
{

    public function ReadAll(ServerRequest $request, Response $response): Response {
        return $response->withJson(['sucess' => 'Get All Users']);
    }

    public function Create(ServerRequest $request, Response $response): Response {
        return $response->withJson(['sucess' => 'Create user']);
    }

    public function ReadById(ServerRequest $request, Response $response): Response {
        return $response->withJson(['sucess' => 'Get user']);
    }

    public function Update(ServerRequest $request, Response $response): Response {
        return $response->withJson(['sucess' => 'Update user']);
    }

    public function Delete(ServerRequest $request, Response $response): Response {
        return $response->withJson(['sucess' => 'Delete user']);
    }
}