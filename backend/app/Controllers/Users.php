<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{

    public function moodboard(): string
    {
        return view('user/moodboard_page');
    }
}
