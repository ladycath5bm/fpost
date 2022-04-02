<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
</head>
<body class="antialiased h-screen flex flex-col gap-5 bg-gray-50 text-gray-600">
    <div class="bg-gray-100 shadow-lg w-full h-16  px-10 flex items-center">
        <span class="mx-2 ">
            <a href="{{ route('welcome') }}">Home</a>
        </span>
        <span class="mx-2 ">
            <a href="{{ route('posts.index') }}">Posts</a>
        </span>
        
        <span class="mx-2">
            <a href="{{ route('exports') }}">Exports/imports</a>
        </span>
      
    </div>
    <div class="max-w-3xl mx-auto h-full w-full">
        @yield('content')
    </div>
</body>
</html>