<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageSwitcherController extends Controller
{
    public function switch(string $locale): RedirectResponse
    {
        // Check if the requested language is supported by your app
        if (in_array($locale, ['en', 'fr'])) {
            Session::put('locale', $locale);
        }

        // Return the user back to their previous page
        return redirect()->back();
    }
}
