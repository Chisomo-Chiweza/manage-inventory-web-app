<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function store(Request $request) {
        
        // Validation
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        // Authenticate user
        if(!auth()->attempt($request->only('username', 'password'))){
            return back()->with('status', 'Invalid login details');
        }

        // Redirect admin
        return redirect()->route('user');

    }

}
