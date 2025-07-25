<!DOCTYPE html>
<html lang="en">
{{--
// Oreilly Training : Laravel from Scratch
// Chapter 5: Components and Styling
// DONE : Videos named: CH-05 Component Attribue and Props | Buttone Link Component Challenge
// TODO : Videos named: CH-05 Mobile Menu Nav Link
 --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>{{$title ?? 'Workopia | Find and list jobs'}}</title>
</head>
<body class="bg-gray-100">
    <x-header />
    @if(request()->is('/'))
        <x-hero />
        <x-top-banner />
    @endif
    
    {{-- Main content area --}}
    <main class="container mx-auto p4 mt-4">
        {{$slot}}
        {{-- @yield('content')  \\ This was used before but now we are using
             components and slots --}}
    </main>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
