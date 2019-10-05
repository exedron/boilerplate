<?php

namespace App\Controllers;

class RootController extends BaseController
{
    /**
     * @path /
     */
    public function groupWeb()
    {
        return WebController::class;
    }
}