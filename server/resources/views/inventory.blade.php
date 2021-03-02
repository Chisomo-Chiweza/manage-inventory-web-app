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

<div class="flex justify-center p-10">

    <div>

        <label for="search" class="sr-only">search</label>
        <input type="text" name="search" id="search" placeholder="Search item" class="bg-white w-full rounded p-3 pr-40" value="">

    </div>
    
</div>

<div class="grid grid-cols-4 gap-4 p-3 px-10">

    <div class="bg-white p-4 rounded-sm m-4">
        <p class="text-gray-500 text-lg text-center">Item</p>
    </div>

    <div class="bg-white p-4 rounded-sm m-4">
        <p class="text-gray-500 text-lg text-center">Item</p>
    </div>

    <div class="bg-white p-4 rounded-sm m-4">
        <p class="text-gray-500 text-lg text-center">Item</p>
    </div>

    <div class="bg-white p-4 rounded-sm m-4">
        <p class="text-gray-500 text-lg text-center">Item</p>
    </div>


    <div class="bg-white p-4 rounded-sm m-4">
        <p class="text-gray-500 text-lg text-center">Item</p>
    </div>

    <div class="bg-white p-4 rounded-sm m-4">
        <p class="text-gray-500 text-lg text-center">Item</p>
    </div>

    <div class="bg-white p-4 rounded-sm m-4">
        <p class="text-gray-500 text-lg text-center">Item</p>
    </div>

    <div class="bg-white p-4 rounded-sm m-4">
        <p class="text-gray-500 text-lg text-center">Item</p>
    </div>

</div>
@endsection