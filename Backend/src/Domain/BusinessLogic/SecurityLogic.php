<?php declare(strict_types=1);

namespace App\Domain\BusinessLogic;

use App\Domain\Entities\DtoRequest\Security\SignInDTO;

class SecurityLogic {

    public function signIn(SignInDTO $signInDTO){
        return ['sucess' => $signInDTO];
    }

}