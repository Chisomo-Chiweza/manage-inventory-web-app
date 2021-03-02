@extends('layouts.admindashboard')

@section('content')

<div class="flex justify-center pt-10">

    <div class="w-4/12 bg-white p-6 rounded-lg">
        
        <h1 class="text-xl text-center text-red-800 p-6">Delete User</h1>
        
        <form action="{{ route('delete') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="firstname" class="sr-only">firstname</label>
                <input type="text" name="firstname" id="firstname" placeholder="Enter user's firstname" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('firstname') border-red-500 @enderror" value="{{ old('firstname') }}">
            </div>
            @error('firstname')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
            
            <div class="mb-4">
                <label for="lastname" class="sr-only">lastname</label>
                <input type="text" name="lastname" id="lastname" placeholder="Enter user's lastname" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('lastname') border-red-500 @enderror" value="{{ old('lastname') }}">
            </div>
            @error('lastname')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            <div class="mb-4">
                <label for="username" class="sr-only">username</label>
                <input type="text" name="username" id="item" placeholder="Enter username" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('username') border-red-500 @enderror" value="{{ old('username') }}">
            </div>
            @error('username')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            <div>
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-4 py-3 rounded font-medium w-full">Remove user</button>
            </div>

        </form>

    </div>
</div>
    
@endsection