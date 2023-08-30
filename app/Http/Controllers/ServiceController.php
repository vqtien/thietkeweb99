<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $data = [];
        return view('services/index', $data);
    }

    public function show($slug)
    {
        $service      = Service::where('slug', $slug)->first();
        $data = [
            'service' => $service
        ];
        return view('services/show', $data);
    }
}
