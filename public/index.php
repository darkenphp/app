<?php
declare(strict_types=1);

use App\Db;
use App\Config;
use Darken\Web\Application;

include __DIR__ . '/../vendor/autoload.php';

$config = new Config(
    rootDirectoryPath: dirname(__DIR__),
);

$app = new Application($config);

// register a container for di
$app->addContainer(Db::class, new Db('localhost', 'root', 'password', 'darken'));

$app->run();