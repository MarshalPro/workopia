<x-layout>
{{-- Oreilly Training : Laravel from Scratch | Chapter 5 | Layout Template --}}
    <x-slot name="title">Create Job</x-slot>
    <h1>Create New Job</h1>
    <form action="/jobs" method="POST">
        @csrf
        <input type="text" name="title" id="title" placeholder="Job Title">
        <input type="text" name="description" id="description" placeholder="Description">
        <button type="submit">Submit</button>
    </form>
</x-layout>
{{-- Oreilly Training : Laravel from Scratch | Chapter 5 | Components and Slots --}}
