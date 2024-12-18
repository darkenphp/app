<?php

namespace App;

use Darken\Config\ConfigHelperTrait;
use Darken\Config\ConfigInterface;
use Darken\Service\ContainerSericeInterface;
use Darken\Service\ContainerService;

class Config implements ConfigInterface, ContainerSericeInterface
{
    use ConfigHelperTrait;

    public function __construct(private readonly string $rootDirectoryPath)
    {
        $this->loadEnvFile();
    }

    public function getRootDirectoryPath(): string
    {
        return $this->path($this->rootDirectoryPath);
    }

    public function getDebugMode(): bool
    {
        return (bool) $this->env('DARKEN_DEBUG', false);
    }

    public function getPagesFolder(): string
    {
        return $this->getRootDirectoryPath() . DIRECTORY_SEPARATOR . $this->env('DARKEN_PAGES_FOLDER', 'pages');
    }

    public function getBuildOutputFolder(): string
    {
        return $this->getRootDirectoryPath() . DIRECTORY_SEPARATOR . $this->env('DARKEN_BUILD_OUTPUT_FOLDER', '.build');
    }

    public function getBuildOutputNamespace(): string
    {
        return $this->env('DARKEN_BUILD_OUTPUT_NAMESPACE', 'Build');
    }

    public function getBuildingFolders(): array
    {
        return [
            $this->getRootDirectoryPath() . DIRECTORY_SEPARATOR . 'components',
            $this->getPagesFolder(),
        ];
    }

    /**
     * This is the right place to register your services
     * this can by any class you like to inject later
     * in your components or pages.
     * if you don't need to inject any service, you can
     * remove this method and remove the interface from
     * this class (ContainerSericeInterface).
     */
    public function containers(ContainerService $service): ContainerService
    {
        return $service
            ->register(new Db(
                host: $this->env('DB_HOST', 'localhost'),
                username: $this->env('DB_USERNAME', 'root'),
                password: $this->env('DB_PASSWORD', ''),
                database: $this->env('DB_DATABASE', 'darken')
            )
        );
    }
}