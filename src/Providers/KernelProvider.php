<?php

namespace App\Providers;

use Exedra\Application;
use Exedra\Contracts\Provider\Provider;

class KernelProvider implements Provider
{
    public function register(Application $app)
    {
        $app->map->middleware(function(\App\Context $context) {
            $context->addParams($context->request->getParams());

            return $context->next($context);
        });
    }
}