<?php

namespace App\Providers;

use Dotenv\Dotenv;
use Exedra\Application;
use Exedra\Config;
use Exedra\Contracts\Provider\Provider;

class DotEnvProvider implements Provider
{
    public function register(Application $app)
    {
        $dotenv = Dotenv::create((string) $app->path, '.env');

        $this->setUpRequired($dotenv);

        $data = $dotenv->load();

        $app->set('dotenv', function() use ($dotenv) {
            return $dotenv;
        });

        $app->set('@env', function() use ($data) {
            $env = new Config();

            foreach ($data as $key => $value) {
                $env->set($key, $value);
            }

            return $env;
        });
    }

    protected function setUpRequired(Dotenv $dotenv)
    {
        // database creds
        $dotenv->required(['DB_NAME', 'DB_HOST', 'DB_USER', 'DB_PASS'])->notEmpty();
    }
}