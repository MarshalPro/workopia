<!DOCTYPE html>
<html lang="en">
{{-- 
// Oreilly Training : Laravel from Scratch
// Chapter 4: Views & Controllers
// DONE : Videos named: CH-04 Partials and include Directive
// TODO : Videos named: CH-05 Intro to Components --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Workopia | Find and list jobs')</title>
</head>
<body class="bg-gray-100">
    @include('partials.navbar')
    <main class="container mx-auto p-4 mt-4">
        @yield('content')
    </main>
</body>
</html>