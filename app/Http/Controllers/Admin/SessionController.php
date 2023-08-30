<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('admin/session/new');
    }

    public function store(Request $request)
    {
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|min:3'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->to(route('admin.login'))
                ->withErrors($validator)
                ->withInput(); 
        } else {
            $loginData = array(
                'email'     => $request->input('email'),
                'password'  => $request->input('password')
            );
            if(Auth::guard('admin')->attempt($loginData))
            {   
                return redirect()->to(route('admin.root'));
            }
            else{
                return redirect()->to(route('admin.login'))->withErrors([
                    'password' => ['The provided password does not match our records']
                ]);
            }
        }
    }

    public function destroy()
    {
        Auth::guard('admin')->logout();
        return redirect()->to(route('admin.login'));
    }
}
