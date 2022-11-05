<?php

namespace App\Http\Controllers;

use inertia;
use App\Models\Skill;
use App\Services\SkillService;
use App\Http\Resources\SkillResource;

use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;



class SkillController extends Controller
{
    public function __construct(private SkillService $skillservice)
    {
        $this->skillservice = $skillservice;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = SkillResource::collection(Skill::all());
        return inertia('Skills/Index')->with(['skills'=>$skills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('Skills/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkillRequest $request)
    {

        /*
        call the skill service to store  the skill
        **/
         return $this->skillservice->store($request);






    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = new SkillResource(Skill::find($id));

        if (!$skill) {
            abort(404);
        }


        return inertia('Skills/Edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkillRequest $request, $id)
    {




        return $this->skillservice->update($request,$id);





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         return $this->skillservice->delete($id);
    }
}
