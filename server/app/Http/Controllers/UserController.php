<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Charts\InventoryChart;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){

        $items = auth()->user()->inventories;
        $name = [];
        $number = [];

        foreach ($items as $item) {
            $name[] = $item->name;
        }
        
        foreach ($items as $item) {
            $number[] = $item->number_of_items;
        }

        return view('user', compact("name", "number"));
    }
}