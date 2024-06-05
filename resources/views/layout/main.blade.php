<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" sizes="32x32" href="foto/ikon.ico" type="image/png">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/73a1d8fd03.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('layout.navbar')
    @include('layout.sidebar') 
    <div class="p-4 sm:ml-64 mt-16 w-auto">
        <div class="rounded-2xl overflow-hidden shadow-lg">
            @yield('content')
        </div>
    </div>  
</body>
</html>
