@extends('layouts.admindashboard')

@section('content')

<div class="flex justify-center pt-10">

    <div class="w-4/12 bg-white p-6 rounded-lg">
        
        <h1 class="text-xl text-center text-green-800 p-6">Create User</h1>
        
        <form action="{{ route('register') }}" method="post">
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
                <input type="text" name="username" id="username" placeholder="Enter username ie firstnamelastname" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('username') border-red-500 @enderror" value="{{ old('username') }}">
            </div>

            @error('username')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            <div class="mb-4">
                <label for="password" class="sr-only">password</label>
                <input type="password" name="password" id="password" placeholder="Assign password" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('password') border-red-500 @enderror" value="">
            </div>

            @error('password')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">password_onfirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('password_confirmation') border-red-500 @enderror" value="">
            </div>

            @error('password_confirmation')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            <div class="mb-4">
                <input type="checkbox" name="admin" id="admin" class="text-gray-500" value="yes">
                <label for="admin" class="text-gray-500 p-2">Make user admin</label>
            </div>

            <div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white px-4 py-3 rounded font-medium w-full">Add user</button>
            </div>

        </form>

    </div>
</div>
    
@endsection