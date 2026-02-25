<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class AboutController extends Controller
{
    public function index()
    {
        $standards = \App\Models\Standard::orderBy('order')->get();
        return view('frontend.about', compact('standards'));
    }
}
