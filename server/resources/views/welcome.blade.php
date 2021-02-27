@extends('layouts.home')

@section('content')

<div class="flex justify-center pt-40">

    <div class="w-4/12 bg-white p-6 rounded-lg">

        @if (session()->has('status'))
            <div class="bg-red-500 p-4 rounded-md mb-6 text-white text-center">
                {{ session('status') }}
            </div>
        @endif

        <h1 class="text-xl text-center">Welcome to the Inventory Management System</h1>
        <h3 class=" mt-2 mb-6 text-gray-500 text-lg text-center">Please sign in</h3>

        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="username" class="sr-only">username</label>
                <input type="text" name="username" id="username" placeholder="Your username" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('username') border-red-500 @enderror" value="{{ old('username') }}">
            </div>

            @error('username')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            <div class="mb-4">
                <label for="password" class="sr-only">password</label>
                <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('password') border-red-500 @enderror" value="">
            </div>

            @error('password')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
    
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-3 rounded font-medium w-full">Login</button>
            </div>

        </form>

    </div>

</div>
    
@endsection
