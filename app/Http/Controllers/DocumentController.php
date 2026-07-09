<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DocumentController extends Controller
{
    public function index(): View 
    {
        /** @var array $data */
        $data = __('documents');

        //Extract pieces
        $pageTitle = $data['title'] ?? 'Documents';
        $categories = $data['categories'] ?? [];
    
        return view('pages.documents', compact('pageTitle', 'categories'));
    }
}
