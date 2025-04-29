<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// DONE : Oreilly Training : Laravel from Scratch
// Chapter 4: Views & Controllers
// Videos named: Creating Controllers | Params and Request in Controller

class JobController extends Controller
{
    public function index()
    {
        $title = 'Available Jobs';
        $jobs = [
            'Database Admin',
            'Software Engineer',
            'Systems Analyst',
            'Web Developer',
        ];
        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(string $id)
    {
        return "Showing job $id";
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        return "Title: $title, Description: $description";
    }
}
