<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{

    public function login(): string
    {
        return view('user/login_page');
    }
}
