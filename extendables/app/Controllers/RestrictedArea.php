<?php

namespace Extendables\Controllers;

class RestrictedArea extends BaseController
{
    public function get_login()
    {
        return view('Extendables\Views\user_login');
    }

    public function index()
    {
        return view('Extendables\Views\admin_page');
    }
}
