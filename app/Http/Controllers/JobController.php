<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// TODO : Oreilly Training : Laravel from Scratch
// Chapter 4: Views & Controllers
// Videos named: CH-04 Generate Resource Routes and Methods

class JobController extends Controller
{
    /**
     * Auto generated functions. Display a listing of the resource.
     */
    public function index()
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
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        return "Title: $title, Description: $description";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Showing job $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function share()
    {
        return 'sharing ...';
    }
}
