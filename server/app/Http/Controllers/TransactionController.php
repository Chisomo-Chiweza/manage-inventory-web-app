<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {

        return view('popups.transaction');
    }

    public function store(Request $request) {

        $number = 1;
        $check = true;

        // Form Validation
        $this->validate($request, [
            'type' => 'required',
            'date' => 'required',
            'initiator' => 'required',
            'item' => 'required',
            'quantity' => 'required'
        ]);
        
        $user_input = (string) $request->item;
        $states = $request->user()->inventories()->get();
        $check = $states->contains('name', $user_input);    
        $isempty = $states->isEmpty();
        
        if ($isempty) {

            // Store first item
            $request->user()->inventories()->create([
                'name' => $request->item,
                'number_of_items' => $request->quantity,
            ]);

            // Store first transaction
            $request->user()->transactions()->create([
                'date' => $request->date,
                'initiated_by' => $request->initiator,
                'type_of_transaction' => $request->type,
                'item_name' => $request->item,
                'qty' => $request->quantity,
            ]);

            return redirect()->route('user'); 

        } elseif (!$isempty) {
            
            if ($check) {

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

            // Store transaction
            $request->user()->transactions()->create([
                'date' => $request->date,
                'initiated_by' => $request->initiator,
                'type_of_transaction' => $request->type,
                'item_name' => $request->item,
                'qty' => $request->quantity,
            ]);

            } elseif (!$check) {

                // Store item
                $request->user()->inventories()->create([
                    'name' => $request->item,
                    'number_of_items' => $request->quantity,
                ]);

                // Store transaction
                $request->user()->transactions()->create([
                    'date' => $request->date,
                    'initiated_by' => $request->initiator,
                    'type_of_transaction' => $request->type,
                    'item_name' => $request->item,
                    'qty' => $request->quantity,
                ]);

            }

            return redirect()->route('user'); 
    
        }

    }
}
