@extends('layouts.admindashboard')

@section('content')

<div class="flex justify-center pt-10">

    <div class="w-4/12 bg-white p-6 rounded-lg">
        
        <h1 class="text-xl text-center text-green-800 p-6">Create User</h1>
        
        <form action="" method="post">

            <div class="mb-4">
                <label for="firstname" class="sr-only">firstname</label>
                <input type="text" name="name" id="firstname" placeholder="Enter user's firstname" class="bg-gray-100 border-2 w-full rounded-lg p-3 " value="">
            </div>

            <div class="mb-4">
                <label for="lastname" class="sr-only">lastname</label>
                <input type="text" name="lastname" id="lastname" placeholder="Enter user's lastname" class="bg-gray-100 border-2 w-full rounded-lg p-3" value="">
            </div>

            <div class="mb-4">
                <label for="username" class="sr-only">username</label>
                <input type="text" name="username" id="item" placeholder="Enter username ie firstnamelastname" class="bg-gray-100 border-2 w-full rounded-lg p-3" value="">
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">password</label>
                <input type="password" name="password" id="password" placeholder="Assign password" class="bg-gray-100 border-2 w-full rounded-lg p-3" value="">
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="sr-only">password-confirm</label>
                <input type="password-confirm" name="password-confirm" id="password-confirm" placeholder="Confirm password" class="bg-gray-100 border-2 w-full rounded-lg p-3" value="">
            </div>

            <div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white px-4 py-3 rounded font-medium w-full">Add user</button>
            </div>

        </form>

    </div>
</div>
    
@endsection