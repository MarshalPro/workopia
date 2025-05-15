<!DOCTYPE html>
<html lang="en">
{{--
// Oreilly Training : Laravel from Scratch
// Chapter 5: Components and Styling
// DONE : Videos named: CH-05 Layout Component & Slots
// TODO : Videos named: CH-05 TailwindCSS and Vite Host Reloading
 --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Workopia | Find and list jobs'}}</title>
</head>
<body class="bg-gray-100">
    <x-header />
    <main class="container mx-auto p-4 mt-4">
        {{$slot}}
        {{-- @yield('content')  \\ This was used before but now we are using
             components and slots --}}
    </main>
</body>
</html>
