<?php

declare(strict_types=1);

namespace Sandbox\Handler;

use Laminas\Diactoros\Response\JsonResponse;
use League\OAuth2\Server\RequestTypes\AuthorizationRequest;
use Mezzio\Authentication\UserInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Container\ContainerInterface;

class SandboxHandler implements RequestHandlerInterface
{
    private ContainerInterface $container ;
    public function __construct($container)
    {
        $this->container = $container ;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse(['message' => "hello"]) ;
    }
}
