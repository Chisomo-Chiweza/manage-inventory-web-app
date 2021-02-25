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
                    <th class = "w-64 bg-blue-400 text-white">Assigned Password</th>
                </tr>

            </thead>
            

            {{-- Users --}}
            <tbody>

                <tr>
                    <td class="text-center border">Annabeth</td>
                    <td class="text-center border">Peterson</td>
                    <td class="text-center border">annabethpeterson</td>
                    <td class="text-center border">1234</td>
                </tr>
                <tr>
                    <td class="text-center border">Annabeth</td>
                    <td class="text-center border">Peterson</td>
                    <td class="text-center border">annabethpeterson</td>
                    <td class="text-center border">1234</td>
                </tr>
                <tr>
                    <td class="text-center border">Annabeth</td>
                    <td class="text-center border">Peterson</td>
                    <td class="text-center border">annabethpeterson</td>
                    <td class="text-center border">1234</td>
                </tr>
                <tr>
                    <td class="text-center border">Annabeth</td>
                    <td class="text-center border">Peterson</td>
                    <td class="text-center border">annabethpeterson</td>
                    <td class="text-center border">1234</td>
                </tr>
                <tr>
                    <td class="text-center border">Annabeth</td>
                    <td class="text-center border">Peterson</td>
                    <td class="text-center border">annabethpeterson</td>
                    <td class="text-center border">1234</td>
                </tr>
                <tr>
                    <td class="text-center border">Annabeth</td>
                    <td class="text-center border">Peterson</td>
                    <td class="text-center border">annabethpeterson</td>
                    <td class="text-center border">1234</td>
                </tr>
                <tr>
                    <td class="text-center border">Annabeth</td>
                    <td class="text-center border">Peterson</td>
                    <td class="text-center border">annabethpeterson</td>
                    <td class="text-center border">1234</td>
                </tr>
                <tr>
                    <td class="text-center border">Annabeth</td>
                    <td class="text-center border">Peterson</td>
                    <td class="text-center border">annabethpeterson</td>
                    <td class="text-center border">1234</td>
                </tr>
                <tr>
                    <td class="text-center border">Annabeth</td>
                    <td class="text-center border">Peterson</td>
                    <td class="text-center border">annabethpeterson</td>
                    <td class="text-center border">1234</td>
                </tr>
                <tr>
                    <td class="text-center border">Annabeth</td>
                    <td class="text-center border">Peterson</td>
                    <td class="text-center border">annabethpeterson</td>
                    <td class="text-center border">1234</td>
                </tr>

            </tbody>
            
        </table>    

    </div>


</div>

<div class="flex justify-between px-20">

    <div>
        <button class="bg-green-500 hover:bg-green-700 text-white p-2 px-10 rounded font-medium w-full">Create user</button>
    </div>

    <div>
        <button class="bg-red-500 hover:bg-red-700 text-white p-2 px-10 rounded font-medium w-full">Delete user</button>
    </div>

</div>

@endsection