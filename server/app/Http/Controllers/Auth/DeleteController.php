<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        ]);

        // Delete user
        $input = $request->firstname;
        $user_id = User::where('firstname', $input)->first()->id;
        $user = User::find($user_id);
        if ($user) {
            $user->delete();
        } 
        
        // Redirect user
        return redirect()->route('admin');
    }

}
