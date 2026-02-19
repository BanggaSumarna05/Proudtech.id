<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Setting;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::active()->get();
        return view('frontend.services.index', compact('services'));
    }

    public function show(Service $service)
    {
        return view('frontend.services.show', compact('service'));
    }
}
