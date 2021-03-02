<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index(){
        
        $users = User::get();
        return view('admin')->with('users', $users);
    }
    
}
