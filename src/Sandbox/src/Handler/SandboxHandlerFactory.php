<?php

declare(strict_types=1);

namespace Sandbox\Handler;

use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;

class SandboxHandlerFactory
{
    public function __invoke(ContainerInterface $container): RequestHandlerInterface
    {
        return new SandboxHandler($container);
    }
}
