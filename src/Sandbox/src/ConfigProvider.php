<?php

declare(strict_types=1) ;

namespace Sandbox ;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ] ;
    }

    private function getDependencies(): array
    {
        return [
            'factories'  => [
                Handler\SandboxHandler::class => Handler\SandboxHandlerFactory::class,
            ],
        ] ;
    }
}
