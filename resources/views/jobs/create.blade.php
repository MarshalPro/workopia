@extends('layout')

@section('title')
    Create New Job
@endsection
@section('content')
{{-- Oreilly Training : Laravel from Scratch | Chapter 4 | Layout Template --}}
    <h1>Create New Job</h1>
    <form action="/jobs" method="POST">
        @csrf
        <input type="text" name="title" id="title" placeholder="Job Title">
        <input type="text" name="description" id="description" placeholder="Description">
        <button type="submit">Submit</button>
    </form>
@endsection
{{-- Oreilly Training : Laravel from Scratch | Chapter 4 | Layout Template --}}
{{-- The @csrf directive generates a CSRF token field, which is used to protect against cross-site request forgery attacks. This token is required for any form submission in Laravel. --}} 
{{-- The form uses the POST method to submit data to the /jobs route, which is typically handled by a controller method that processes the job creation logic. --}}