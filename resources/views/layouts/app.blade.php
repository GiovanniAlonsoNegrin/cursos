<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))

            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <div id="ubicacion">
            Tus coordenadas aparecerán aquí
        </div>

        @stack('modals')

        @livewireScripts

        <script>
            window.onload = miUbicacion;

            function miUbicacion(){
                //Si los servicios de geolocalización están disponibles
                if(navigator.geolocation){
                    // Para obtener la ubicación actual llama getCurrentPosition.
                    navigator.geolocation.getCurrentPosition( muestraMiUbicacion );
                }else{ //de lo contrario
                    alert("Los servicios de geolocalizaci\363n  no est\341n disponibles");
                }
            }
            function muestraMiUbicacion(posicion){
                var latitud = posicion.coords.latitude
                var longitud = posicion.coords.longitude
                var output = document.getElementById("ubicacion");
                output.innerHTML = "Latitud: "+latitud+"  Longitud: "+longitud;
            }
        </script>
    </body>
</html>
