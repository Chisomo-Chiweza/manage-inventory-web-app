<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index() {

        $items = auth()->user()->inventories;
        $inventory = [];

        foreach ($items as $item) {
            $inventory[] = $item;
        }

        return view('inventory', compact("inventory"));
    }
}
