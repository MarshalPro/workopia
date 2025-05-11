<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


// Oreilly Training : Laravel from Scratch
// Oreilly Training : Laravel from Scratch
// Chapter 4: Views & Controllers
// DONE : Videos named: CH-04 Type Hinting in Controllers
// TODO : Videos named: CH-04 Layouts with Template Inheritance

class JobController extends Controller
{
    /**
     * Auto generated functions. Display a listing of the resource.
     */
    public function index(): View
    {
        $jobs = [
            'Database Admin',
            'Software Engineer',
            'Systems Analyst',
            'Web Developer',
        ];
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): string
    {
        return "Storing job ...";
        // $title = $request->input('title');
        // $description = $request->input('description');

        // return "Title: $title, Description: $description";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): string
    {
        return "Showing job $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Editing job $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Updating job $id";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): string
    {
        return "Deleting job $id";
    }

    public function share()
    {
        return 'sharing ...';
    }
}
