<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technology;
class TechnologyController extends Controller
{
    //
    public function index()
    {       
        $technologies = Technology::all();
        $data = [
            'technologies'  => $technologies,
        ];

        return view('technologies/index', $data);
    }
}
