@extends('layout')
@section('content')
{{-- Oreilly Training : Laravel from Scratch | Chapter 4 | Layout Template --}}
<h1>Available Jobs</h1>
<ul>
    @forelse($jobs as $job)
    <li>{{$job}}</li>
    @empty
    <li>No jobs listed for the timebeing</li>
    @endforelse
</ul>
@endsection
{{-- Oreilly Training : Laravel from Scratch | Chapter 4 | Layout Template --}}
{{-- The @extends directive is used to specify which layout the view should extend. In this case, it extends the layout located at resources/views/layout.blade.php. The @section directive defines a section of content that will be injected into the layout. The @yield directive in the layout file indicates where this content should be placed. --}} 
{{-- The @forelse directive is a combination of @foreach and @empty. It iterates over the $jobs array, displaying each job in a list item. If the $jobs array is empty, it displays a message indicating that there are no jobs listed. --}}