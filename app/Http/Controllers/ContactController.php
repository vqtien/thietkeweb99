<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $hash = sha1(time());
        session()->put('captcha', $hash);
        $data = [
            'hash' => $hash,
        ];
        return view('contact/index', $data);
    }
}
