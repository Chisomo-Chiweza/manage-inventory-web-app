<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {

        return view('popups.transaction');
    }

    public function store(Request $request) {

        // Form Validation
        $this->validate($request, [
            'type' => 'required',
            'date' => 'required',
            'initiator' => 'required',
            'item' => 'required',
            'quantity' => 'required'
        ]);

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
