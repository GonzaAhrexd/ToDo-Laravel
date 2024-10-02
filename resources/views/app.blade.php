<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Mis tareas</title>
</head>
<body>
    {{-- NavBar --}}
    <nav class="bg-gray-800 p-4">
        <a href="" class="text-white">My tasks</a>
    </nav>
    @yield('content')
    
</body>
</html>