<?php

namespace Extendables\App\Controllers;

class RestrictedArea extends BaseController
{
    public function index()
    {
        return view('Extendables\App\Views\admin_page');
    }
}
