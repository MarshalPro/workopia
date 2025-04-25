<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
</head>
<body>
    {{-- Oreilly Training : Laravel from Scratch
         Chapter 4: Views & Controllers
         Video named: More Loop Directives & $loop Variable --}}
    <h1>{{$title}}</h1>
    <ul>
        @forelse($jobs as $job)
        <li>{{$job}}</li>
        @empty
        <li>No jobs listed for the timebeing</li>
        @endforelse
    </ul>

    {{-- OLD Version --}}
    {{-- <h1>{{$title}}</h1>
    @if (!empty($jobs))
    <ul>
        @foreach($jobs as $job)
        <li>{{$job}}</li>
        @endforeach
    </ul>
    @else
    <p>No jobs availabe. Stay tuned as we'll be back</p>
    @endif --}}
</body>
</html>
