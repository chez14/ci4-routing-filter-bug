<?php

namespace Extendables\App\Controllers;

class RestrictedArea extends BaseController
{
    public function get_login()
    {
        return view('Extendables\App\Views\user_login');
    }

    public function index()
    {
        return view('Extendables\App\Views\admin_page');
    }
}
