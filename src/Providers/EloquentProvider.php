<?php

namespace App\Providers;

use App\App;
use Exedra\Application;
use Exedra\Contracts\Provider\Provider;
use Illuminate\Database\Capsule\Manager;

class EloquentProvider implements Provider
{
    /**
     * @param Application|App $app
     * @throws \Exception
     */
    public function register(Application $app)
    {
        $config = $app->env;
        $capsule = new Manager;
        $capsule->addConnection(array(
            'driver' => 'mysql',
            'host' => $config->get('DB_HOST', 'localhost'),
            'database' => $config->get('DB_NAME'),
            'username' => $config->get('DB_USER'),
            'password' => $config->get('DB_PASS'),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci'
        ));
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        // register eloquent
        $app->set('eloquent', function() use($capsule) {
            return $capsule;
        });
    }
}