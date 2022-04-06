<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body class="bg-gray-900">
    <!-- Navigationsleiste -->
    <a href="#">
        <img class="fixed left-10 top-2 w-28 h-14 bg-gray-800 rounded-xl mx-10 hover:w-32 hover:h-16"
            src="{{ asset('images/DoCarmoW_Transparent.png') }}" alt=" DoCarmoDJ">
    </a>

    <div class="flex justify-center my-2 mx-10 rounded-xl bg-gray-800">
        <!-- Image -->
        <!-- Navigationselemente -->
        <a class="mx-10 my-2 text-2xl p-2 text-stone-300 rounded-xl hover:text-white hover:bg-gray-900"
            href="">Startseite</a>
        <a class="mx-10 my-2 text-2xl p-2 text-stone-300 rounded-xl hover:text-white hover:bg-gray-900"
            href="">Kontakt</a>
        <a class="mx-10 my-2 text-2xl p-2 text-stone-300 rounded-xl hover:text-white hover:bg-gray-900"
            href="">Galerie</a>
    </div>
    </div>

    <!--Page Content -->
    <div class="mt-10 mx-11">
        @yield('content')
    </div>
</body>

</html>
