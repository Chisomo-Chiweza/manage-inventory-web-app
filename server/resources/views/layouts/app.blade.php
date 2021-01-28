<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inventory Management System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body class="bg-gray-200">

        <nav class="p-6 bg-white flex justify-between mb-4">

            <ul class="flex items-center">
                <li>
                    <a class="p-3" href="">Home</a>
                </li>
                <li>
                    <a class="p-3" href="">Dashboard</a>
                </li>
            </ul>

            <ul class="flex items-center">
                <li>
                    <a class="p-3" href="">Welcome Chisomo</a>
                </li>
                <li>
                    <a class="p-3" href="">Login</a>
                </li>
                <li>
                    <a class="p-3" href="">Logout</a>
                </li>
            </ul>
        </nav>

        @yield('content')
        
    </body>

</html>