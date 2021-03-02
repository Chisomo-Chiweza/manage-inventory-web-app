<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteController extends Controller

{
    public function index() {

        return view('popups.delete');
    }

    public function store(Request $request) {

        // Validation
        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'username' => 'required',
            'password' => 'required',
        ]);

        // Delete user
        dd('deleted ma gee');
    
    }

}
