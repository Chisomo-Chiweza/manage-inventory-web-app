@extends('layouts.admindashboard')

@section('content')
    
<div class="flex justify-center pt-10">

    <div class="bg-white p-4 rounded-lg mb-10">

        <table class="table-auto border-collapse border">

             {{-- Headers --}}
            <thead>

                <tr>
                    <th class = "w-64 bg-blue-400 text-white">First Name</th>
                    <th class = "w-64 bg-blue-400 text-white">Last Name</th>
                    <th class = "w-64 bg-blue-400 text-white">Username</th>
                    <th class = "w-64 bg-blue-400 text-white">Admin?</th>
                </tr>

            </thead>
            

            {{-- Users --}}
            <tbody>
                @if ($users->count())
                    @foreach ($users as $user)
                    <tr>
                        <td class="text-center border">{{ $user->firstname }}</td>
                        <td class="text-center border">{{ $user->lastname }}</td>
                        <td class="text-center border">{{ $user->username }}</td>
                        <td class="text-center border">{{ $user->admin }}</td>
                    </tr>
                    @endforeach    
                @else
                    <p class="text-center text-gray-500">There are no users registered</p>
                @endif    

            </tbody>
            
        </table>    

    </div>


</div>

<div class="flex justify-between px-20">

    <div>
        <button class="bg-green-500 hover:bg-green-700 text-white p-2 px-10 rounded font-medium w-full"><a href="{{ route('register') }}">Create user</a></button>
    </div>

    <div>
        <button class="bg-red-500 hover:bg-red-700 text-white p-2 px-10 rounded font-medium w-full"><a href="{{ route('delete') }}">Delete user</a></button>
    </div>

</div>

@endsection