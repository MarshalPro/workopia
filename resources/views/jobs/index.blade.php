<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
</head>
<body>
    {{-- Oreilly Training : Laravel from Scratch | Chapter 4 | More Loop Directives & $loop Variable --}}
    <h1>{{$title}}</h1>
    <ul>
        @forelse($jobs as $job)
        <li>{{$job}}</li>
        @empty
        <li>No jobs listed for the timebeing</li>
        @endforelse
    </ul>

</body>
</html>
