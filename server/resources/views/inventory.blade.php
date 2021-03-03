@extends('layouts.userdashboard')

@section('navigation')

<li>
    <a href="{{ route('user') }}" class="p-6 text-lg">Home</a>
</li>

<li>
    <a href="{{ route('inventory') }}" class="p-6 text-lg font-semibold">Item Management</a>
</li>

@endsection


@section('content')

<div class="flex justify-center p-6">

    <h1 class="text-2xl text-center">Items in Stock</h1>

</div>

@empty($inventory)

    <div class="bg-white flex justify-center p-10">

        <p class="text-center text-xl text-gray-500">There are no items in your inventory</p>

    </div>
        
@endempty   

<div class="p-6 grid grid-cols-3 gap-6">

    @foreach ($inventory as $item)

        <div class="bg-white p-4 rounded-lg m-4 shadow-xl border-2 border-solid border-pink-500">

            <h1 class="text-lg text-center">{{ $item->name }}</p>

            <p class="text-lg text-center">{{ $item->number_of_items }} units in stock</p>

        </div>

    @endforeach
            
</div>      
      
   
@endsection