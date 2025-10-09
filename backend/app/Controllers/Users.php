<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{

    public function signup(): string
    {
        return view('user/signup_page');
    }
}
