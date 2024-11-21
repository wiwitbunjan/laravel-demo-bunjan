<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WiwitsController extends Controller
{
    public function showHomePage()
{
    return view ('WiwitsFile.Home');
}
}
