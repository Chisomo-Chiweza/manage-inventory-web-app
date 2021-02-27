<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function index() {
        
        return view('welcomeadmin');

    }

    public function store(Request $request) {

        // Validation
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        // Authenticate admin
        if(!auth()->attempt($request->only('username', 'password'))) {
            return back()->with('status', 'Invalid login details');
        } 
        

        // Redirect admin
        return redirect()->route('admin');

    }
}
