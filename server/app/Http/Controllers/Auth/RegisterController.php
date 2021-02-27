<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {

        return view('popups.register');
    }

    public function store(Request $request) {
        
        // Validation
        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required|confirmed',
        ]);

        // Store user
        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        // Redirect admin
        return redirect()->route('admin');

        // Authenticate user
        // auth()->attempt($request-only('username', 'password'));
        // @auth ... @endauth & @guest ... @endguest in blade
    }
}
