<?php

namespace App\Http\Controllers;

use inertia;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Services\ProjectService;
use App\Http\Resources\ProjectResource;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{

    public function __construct(private ProjectService $projectservice)
    {
        $this->projectservice=$projectservice;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $projects =ProjectResource::collection(Project::with('skill')->get());
        return inertia('Projects/Index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('Projects/Create')->with(['skills'=>Skill::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return $this->projectservice->store($request);



    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        $skills = Skill::all();

        if (!$project) {
            abort(404);
        }

        return inertia('Projects/Edit',compact('project','skills'));





    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, $id)
    {


         return $this->projectservice->update($request,$id);




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {



        return $this->projectservice->delete($id);



    }
}
