<?php declare(strict_types=1);

use App\Domain\Security\Service\JwtCustom;
use Psr\Container\ContainerInterface;
use Selective\Config\Configuration;
use Slim\App;
use Slim\Factory\AppFactory;
use \Firebase\JWT\JWT;

return [
    Configuration::class => function() {
        return new Configuration(require __DIR__ . '/settings.php');
    },
    App::class => function (ContainerInterface $container){
        AppFactory::setContainer($container);
        $app = AppFactory::create();
        return $app;
    },
];