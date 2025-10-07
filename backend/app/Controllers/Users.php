<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{

    public function roadmap(): string
    {
        return view('user/roadmap_page');
    }
}
