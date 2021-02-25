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

        <nav class="p-6 bg-white flex justify-between">

            <ul class="flex items-center">

                @yield('navigation')
    
            </ul>

            <ul class="flex items-center">

                <li>
                    <a href="" class="p-6 text-lg">Chisomo Chiweza</a>
                </li>

                <li>
                    <a href="" class="p-6 text-lg text-gray-500">Logout</a>
                </li>

            </ul>

        </nav>

        @yield('content')
        
    </body>

</html