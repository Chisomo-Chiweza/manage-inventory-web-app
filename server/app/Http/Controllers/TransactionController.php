<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {

        return view('popups.transaction');
    }

    public function store(Request $request) {

        $number = 1;

        // Form Validation
        $this->validate($request, [
            'type' => 'required',
            'date' => 'required',
            'initiator' => 'required',
            'item' => 'required',
            'quantity' => 'required'
        ]);
        

        // Update already existing item
        if ($request->user()->inventories()->where('name', $request->item)) {

            // Increment value
            if ($request->type == 'deposit') {
                $users = $request->user()->inventories()->where('name', $request->item)->get();
                    foreach ($users as  $user) {
                        $number = (int) $user->number_of_items;
                        $number += (int) $request->quantity;
                    }
                //Update record
                $request->user()->inventories()->where('name', $request->item)->update(['number_of_items' => $number]);
            } 
            
            // Withdraw value
            if ($request->type == 'withdrawal') {
                $users = $request->user()->inventories()->where('name', $request->item)->get();
                    foreach ($users as  $user) {
                        $number = (int) $user->number_of_items;
                        $number -= (int) $request->quantity;
                    }

                //Update record
                $request->user()->inventories()->where('name', $request->item)->update(['number_of_items' => $number]);
            }

        }  
        
        // If item doesn't exist, create new one
        if ($request->user()->inventories()->where('name', !($request->item))) {
            $request->user()->inventories()->create([
                'name' => $request->item,
                'number_of_items' => $request->quantity,
            ]);
        }

        // Store transaction
        $request->user()->transactions()->create([
            'date' => $request->date,
            'initiated_by' => $request->initiator,
            'type_of_transaction' => $request->type,
            'item_name' => $request->item,
            'qty' => $request->quantity,
        ]);

        return redirect()->route('user');
    }
}
