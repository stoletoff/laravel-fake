<?php

namespace App\Http\Controllers;

use App\Math;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class HomeController extends Controller
{
    function huindex()
    {
        return view('welcome');
    }
}
