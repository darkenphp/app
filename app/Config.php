<?php

namespace App;

use Darken\Repository\Config as RepositoryConfig;

class Config extends RepositoryConfig
{
    public function getDebugMode(): bool
    {
        return $this->env('DARKEN_DEBUG', false);
    }

    public function getBuildOutputFolder(): string
    {
        return $this->getRootDirectoryPath() . DIRECTORY_SEPARATOR . '.build';
    }

    public function getPagesFolder(): string
    {
        return $this->getRootDirectoryPath() . DIRECTORY_SEPARATOR . 'pages';
    }

    public function getBuildOutputNamespace(): string
    {
        return 'Build';
    }
}