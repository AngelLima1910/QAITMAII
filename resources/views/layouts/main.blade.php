<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('titulo') - QAITMAII</title>
        
        <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body class="bg-gray-100 text-gray-800">

        <nav class="flex py-3 bg-purple-700 text-white">
        <div class="w-1/4 px-12 mr-auto">
            <img src="https://milpaalta2.tecnm.mx/img/history/itma2.png" height="100px" width="80px">
        </div>
        <div class="w-1/4 px-12 mr-auto">
            <img src="https://www.tecnm.mx/images/tecnm_virtual/tecnm.png" height="100px" width="80px">
        </div>
        <div class="w-1/4 px-12 mr-auto">
            <img src="{{ asset('img/logo_SIS.jpg') }}" height="100px" width="80px">
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())
            <li class="mx-8">
            <p class="text-xl">Hola <b>{{ auth()->user()->name }}</b></p>
            </li>
            <li>
            <a href="{{ route('login.destroy') }}" class="font-bold
            py-3 px-4 rounded-md bg-red-500 hover:bg-white-600">Salir</a>
            </li>
        @else
            <li class="mx-6">
            <a href="{{ route('login.index') }}" class="font-semibold
            border-2 border-white py-2 px-4 rounded-md bg-white 
            hover:text-pink-700">Iniciar Sesión</a>
            </li>
            <li>
            <a href="{{ route('register.index') }}" class="font-semibold
            border-2 border-white py-2 px-4 rounded-md hover:bg-white 
            hover:text-pink-0">Registrate</a>
            </li>
        @endif
        </ul>
        </nav>
        @yield('contenido')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>