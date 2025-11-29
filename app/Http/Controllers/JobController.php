<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact( 'jobs'));
    }

        public function saved()
    {
        $jobs = Job::all();
        return view('jobs.saved', compact( 'jobs'));
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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'salary' => 'required|min:0|max:1000000',
            'requirements' => 'string',
            'benefits' => 'required|string',
            'tags' => 'string',
            'country' => 'required|string',
            'city' => 'required|string',
            'job_type' => 'required|string',
            'remote' => 'required|boolean',
            'company_name' => 'required|string|min:2|max:255',
            'company_website' => 'required|url',
            'email' => 'required|email',
            'contact_phone' => 'string',
        ]);

        // Job::create([
        //     'title' => $validated['title'],
        //     'description' => $validated['description'],
        // ]);

        // return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {

        return view('jobs.show')-> with('job',$job);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('jobs.edit');
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
}
