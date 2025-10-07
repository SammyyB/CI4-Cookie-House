<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\View;

class Users extends BaseController
{
    public function index(): string
    {
        return view('user/landing_page');
    }
}
