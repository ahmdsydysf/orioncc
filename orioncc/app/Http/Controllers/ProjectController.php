<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $allData = Project::with(['Client','Sector'])->paginate(9);
        return view('orionccFront.projects',['allData' => $allData , 'page' => $page]);
    }
    /**
     * Display a listing of the resource.
     */
    public function indexOfList(Request $request)
    {
        $page = $request->get('page', 1);

        $allData = Project::with(['Client','Sector'])->paginate(9);
        return view('orionccFront.projects_list',['allData' => $allData, 'page' => $page]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('orionccFront.project-details',['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
