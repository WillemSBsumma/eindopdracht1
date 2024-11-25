<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Store</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-sky-900 h-screen flex flex-col">
        <div class="flex-1 overflow-auto flex flex-col md:flex-row">
            <div class="flex-1 h-auto overflow-auto">
                @yield('content')
            </div>
            <div class="flex-1 h-auto overflow-auto">
                @yield('menu')
            </div>
        </div>
        <div class="flex justify-center h-auto bg-black text-lime-400 pt-2 italic text-xs">
            &copy; 2024 - Eindopdracht Willem Beaujean.
        </div>
    </div>
</body>

</html>