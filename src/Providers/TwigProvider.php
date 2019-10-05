<?php

namespace App\Providers;

use Exedra\Application;
use Exedra\Contracts\Provider\Provider;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigProvider implements Provider
{
    public function register(Application $app)
    {
        $app->set('@twig', function() use ($app) {
            return new Environment(new FilesystemLoader($app->path->to('views')));
        });
    }
}