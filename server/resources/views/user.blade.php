@extends('layouts.userdashboard')

@section('navigation')

<li>
    <a href="{{ route('user') }}" class="p-6 text-lg font-semibold">Home</a>
</li>

<li>
    <a href="{{ route('inventory') }}" class="p-6 text-lg">Item Management</a>
</li>
    
@endsection

@section('content')

<div class="flex justify-center pt-10">
    
    <div class="bg-white p-4 rounded-lg w-10/12 mb-8">

        @empty($name)
            <p class=" text-center text-base">You have no items in your inventory</p>    
        @endempty

        <canvas id="canvas" height="100" width="300">
        
        </canvas>
        
    </div>

</div>

<div class="flex justify-center">

    <div>
        <button class="bg-green-500 hover:bg-green-700 text-white px-4 py-3 rounded font-medium w-full"><a href="{{ route('transaction') }}">Create transaction</a></button>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>

    var ctx = document.getElementById("canvas").getContext('2d');
    var ItemNames = {!! json_encode($name) !!};
    var Numbers = {!! json_encode($number) !!};

    var InventoryChart = new Chart(ctx, {

        type: 'bar',

        data: {

            labels: ItemNames,
            datasets: [{
                label: 'Number of items',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: Numbers,
                borderwidth: 1
            }]
            
        },

        options: {

            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },

            title: {
                display: true,
                text: 'Items In Inventory'
            }
        }
    });

</script>

@endsection