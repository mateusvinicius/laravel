<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title >{{ config('app.name', 'Filme') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    @yield('styles')
</head>
<body>
    <div id="app">

        @include('layouts.includes.header')

       @yield('carrosel')


        <div class="categorias">
             <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="list-cat">
                            <li class="col-1">....</li>
                            <li class="col-1">....</li>
                            <li class="col-1">....</li>
                            <li class="col-1">....</li>
                            <li class="col-1">....</li>
                            <li class="col-1">....</li>
                            <li class="col-1">....</li>
                            <li class="col-1">....</li>
                        </ul>
                        <div class="menu">Menu</div>
                    </div>
                </div>
            </div>
       </div>


        <main class="py-5">
            <div class="container-fluid">
                 @yield('content')
            </div>
        </main>



        @include('layouts.includes.footer')

    </div>




</body>
</html>
