<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLogoutController extends Controller
{
    public function store(){
        
        auth()->logout();

        return redirect()->route('adminlogin');
    }
}
