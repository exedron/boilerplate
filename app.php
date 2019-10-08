<?php
require_once __DIR__ . '/vendor/autoload.php';

$app = new \App\App(__DIR__, \Exedra\Runtime\Context::class);

/*
|--------------------------------------------------------------------------
| Providers Registry
|--------------------------------------------------------------------------
*/
$app->provider->add(new \Exedra\Routeller\RoutellerRootProvider(\App\Controllers\RootController::class));
$app->provider->add(\App\Providers\KernelProvider::class);
$app->provider->add(\App\Providers\DotEnvProvider::class);
$app->provider->add(\Exedra\Console\ConsoleProvider::class);
$app->provider->add(\App\Providers\TwigProvider::class);
$app->provider->add(\App\Providers\EloquentProvider::class);

return $app;