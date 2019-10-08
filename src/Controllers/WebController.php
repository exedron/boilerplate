<?php

namespace App\Controllers;

use App\Context;

class WebController extends BaseController
{
    /**
     * @path /
     */
    public function getIndex(Context $context)
    {
        return $context->twig->render('index.twig');
    }
}