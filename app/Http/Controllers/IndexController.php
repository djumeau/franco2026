<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class indexController extends Controller
{
    public function index(): View
    {
        return view('pages.index');
    }
}
