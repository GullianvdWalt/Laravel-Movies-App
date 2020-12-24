<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link rel="shortcut icon" type="image/x-icon" href="/images/logo.png"/>
    <link rel="stylesheet" href="/css/app.css">
    @livewireStyles
</head>
<body class="font-sans bg-white text-teal-400">
    <nav class="border-b border-teal-400">

        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">

            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="#">
                        <img src="/images/logo.png" alt="logo" class="w-8 h-8">
                    </a>
                </li>
                <li  class="md:ml-16 mt-3 md:mt-0">
                    <a href="" class="hover:text-teal-600">Movies</a>
                </li>
                <li  class="md:ml-16 mt-3 md:mt-0">
                    <a href="" class="hover:text-teal-600">TV Series</a>
                </li>
                <li  class="md:ml-16 mt-3 md:mt-0">
                    <a href="" class="hover:text-teal-600">Actors</a>
                </li>
            </ul>
            <ul class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown/>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/images/avatar.png" alt="Avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </ul>
        </div>

    </nav>
    @yield('content')
    @livewireScripts
</body>
</html>
