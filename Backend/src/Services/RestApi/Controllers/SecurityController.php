<?php declare(strict_types=1);

namespace App\Services\RestApi\Controllers;


use App\Domain\BusinessLogic\SecurityLogic;
use App\Domain\Entities\DtoRequest\Security\SignInDTO;
use Slim\Http\Response;
use Slim\Http\ServerRequest;

final class SecurityController
{

    private $securityLogic_;

    public function __construct(SecurityLogic $securityLogic)
    {
        $this->securityLogic_ = $securityLogic;
    }

    public function SignIn(ServerRequest $request, Response $response): Response {

        $requestData = (array) $request->getParsedBody();
        $signInDTO = new SignInDTO();
        $signInDTO->username = $requestData['username'];
        $signInDTO->password = $requestData['password'];
        return $response->withJson($this->securityLogic_->signIn($signInDTO));
        
    }

    public function SignUp(ServerRequest $request, Response $response): Response {

        $signUp = (array) $request->getParsedBody();
        
        return $response->withJson(['sucess' => 'SignIn success']);
    }

}