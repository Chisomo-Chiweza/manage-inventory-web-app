@extends('layouts.userdashboard')

@section('navigation')

<li>
    <a href="" class="p-6 text-lg">Home</a>
</li>

<li>
    <a href="" class="p-6 text-lg">Item Management</a>
</li>
    
@endsection

@section('content')

<div class="flex justify-center pt-10">

    <div class="w-4/12 bg-white p-6 rounded-lg">
        
        <h1 class="text-xl text-center text-green-800 p-6">Create Transaction</h1>
        
        <form action="" method="post">

            <div class="mb-4">
                <label for="type" class="text-gray-600 pr-4">Select type of transaction</label>
                <select name="type" id="type-select" class="p-2 rounded-lg border-2 bg-gray-100">
                    <option value="deposit" class="bg-gray-100 text-gray-400">Deposit</option>
                    <option value="withdrawal" class="bg-gray-100 text-gray-400">Withdrawal</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="date" class="sr-only">date</label>
                <input type="date" name="date" id="date" placeholder="" class="bg-gray-100 border-2 w-full rounded-lg p-3 " value="">
            </div>

            <div class="mb-4">
                <label for="initiator" class="sr-only">initator</label>
                <input type="text" name="initator" id="initiator" placeholder="Who is initiating this transaction?" class="bg-gray-100 border-2 w-full rounded-lg p-3" value="">
            </div>

            <div class="mb-4">
                <label for="item" class="sr-only">item</label>
                <input type="text" name="item" id="item" placeholder="Item name" class="bg-gray-100 border-2 w-full rounded-lg p-3" value="">
            </div>

            <div class="mb-4">
                <label for="quantity" class="sr-only">quantity</label>
                <input type="text" name="quantity" id="quantity" placeholder="Number of items" class="bg-gray-100 border-2 w-full rounded-lg p-3" value="">
            </div>


            <div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white px-4 py-3 rounded font-medium w-full">Process Transaction</button>
            </div>

        </form>

    </div>
</div>
    
@endsection