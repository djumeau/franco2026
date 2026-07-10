<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PrayerTopicsController extends Controller
{
    public function index():View {

        return view('pages.prayertopics');
    }
}
