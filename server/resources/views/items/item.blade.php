@extends('layouts.userdashboard')

@section('content')

<div class="flex justify-center">

    <div class="w-10/12 bg-white m-10 p-4 flex justify-between">

        <h1>Chart</h1>

        <table class="table-auto border-collapse border">
    
             {{-- Headers --}}
            <thead>

                <tr>
                    <th class = "w-40 bg-blue-400 text-white">Date</th>
                    <th class = "w-40 bg-blue-400 text-white">Initiated by</th>
                    <th class = "w-40 bg-blue-400 text-white">Item name</th>
                    <th class = "w-40 bg-blue-400 text-white">Number of items</th>
                </tr>

            </thead>
            

            {{-- Users --}}
            <tbody>

                <tr>
                    <td class="text-center border">12/03/2021</td>
                    <td class="text-center border">Jordan</td>
                    <td class="text-center border">Maize</td>
                    <td class="text-center border">70</td>
                </tr>
                <tr>
                    <td class="text-center border">12/03/2021</td>
                    <td class="text-center border">Jordan</td>
                    <td class="text-center border">Maize</td>
                    <td class="text-center border">70</td>
                </tr>
                <tr>
                    <td class="text-center border">12/03/2021</td>
                    <td class="text-center border">Jordan</td>
                    <td class="text-center border">Maize</td>
                    <td class="text-center border">70</td>
                </tr>
                <tr>
                    <td class="text-center border">12/03/2021</td>
                    <td class="text-center border">Jordan</td>
                    <td class="text-center border">Maize</td>
                    <td class="text-center border">70</td>
                </tr>
                <tr>
                    <td class="text-center border">12/03/2021</td>
                    <td class="text-center border">Jordan</td>
                    <td class="text-center border">Maize</td>
                    <td class="text-center border">70</td>
                </tr>
                <tr>
                    <td class="text-center border">12/03/2021</td>
                    <td class="text-center border">Jordan</td>
                    <td class="text-center border">Maize</td>
                    <td class="text-center border">70</td>
                </tr>
                <tr>
                    <td class="text-center border">12/03/2021</td>
                    <td class="text-center border">Jordan</td>
                    <td class="text-center border">Maize</td>
                    <td class="text-center border">70</td>
                </tr>
                <tr>
                    <td class="text-center border">12/03/2021</td>
                    <td class="text-center border">Jordan</td>
                    <td class="text-center border">Maize</td>
                    <td class="text-center border">70</td>
                </tr>
                <tr>
                    <td class="text-center border">12/03/2021</td>
                    <td class="text-center border">Jordan</td>
                    <td class="text-center border">Maize</td>
                    <td class="text-center border">70</td>
                </tr>
                <tr>
                    <td class="text-center border">12/03/2021</td>
                    <td class="text-center border">Jordan</td>
                    <td class="text-center border">Maize</td>
                    <td class="text-center border">70</td>
                </tr>
                <tr>
                    <td class="text-center border">12/03/2021</td>
                    <td class="text-center border">Jordan</td>
                    <td class="text-center border">Maize</td>
                    <td class="text-center border">70</td>
                </tr>
                
            </tbody>
            
        </table>
        
    </div>  

</div>


    
  
    
@endsection