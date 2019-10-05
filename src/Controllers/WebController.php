<?php

namespace App\Controllers;

class WebController extends BaseController
{
    /**
     * @path /
     */
    public function getIndex()
    {
        return 'Hello world';
    }
}