@extends('layouts.userdashboard')

@section('navigation')

<li>
    <a href="" class="p-6 text-lg font-semibold">Home</a>
</li>

<li>
    <a href="" class="p-6 text-lg">Item Management</a>
</li>
    
@endsection

@section('content')

<div class="flex justify-center pt-10">

    <div class="bg-white p-4 rounded-lg w-10/12 mb-10">

        <div class="text-gray-500 text-2xl text-center p-40">Chart</div>

    </div>
</div>

<div class="flex justify-center">

    <div>
        <button class="bg-green-500 hover:bg-green-700 text-white px-4 py-3 rounded font-medium w-full"><a href="{{ route('transaction') }}">Create transaction</a></button>
    </div>

</div>

@endsection