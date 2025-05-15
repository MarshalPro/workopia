{{-- Oreilly Training : Laravel from Scratch | Using Components and Slots --}}
<x-layout>
    <h1>Available Jobs</h1>
    <ul>
        @forelse($jobs as $job)
        <li>{{$job}}</li>
        @empty
        <li>No jobs listed for the timebeing</li>
        @endforelse
    </ul>
</x-layout>
