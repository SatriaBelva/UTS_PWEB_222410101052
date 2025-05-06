<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="flex flex-col min-h-screen bg-[#F3F6F9]">
    @include('Components.navbar')

    <main class="flex-grow my-7 px-24 bg-[#F3F6F9]">
        @yield('content')
    </main>

    <x-footer>
        <x-slot:nama> {{ $nama }} </x-slot:nama>
        <x-slot:nim> {{ $nim }} </x-slot:nim>
    </x-footer>
</body>
</html>