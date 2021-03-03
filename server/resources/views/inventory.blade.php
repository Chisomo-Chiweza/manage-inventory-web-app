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

<div class="grid grid-cols-4 gap-4 p-3 px-10">

    @empty($inventory)
        <p class="text-center text-xl text-gray-500">There are no items in your inventory</p>
    @endempty

    @foreach ($inventory as $item)
    <div class="bg-white p-4 rounded-sm m-4">
        <h1 class="text-lg text-center">{{ $item->name }}</p>
        <p class="text-lg text-center text-gray-600">{{ $item->number_of_items }} units in stock</p>
    </div>
    @endforeach
    
</div>
@endsection