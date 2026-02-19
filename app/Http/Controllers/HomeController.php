<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::active()->take(6)->get();
        $projects = Project::published()->latest()->take(4)->get();
        $testimonials = Testimonial::published()->latest()->take(3)->get();
        $waUrl = Setting::whatsappUrl();

        return view('home.index', compact('services', 'projects', 'testimonials', 'waUrl'));
    }
}
