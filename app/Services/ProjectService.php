<?php
namespace App\Services;

use App\Models\Project;

use Illuminate\Support\Facades\Storage;

class ProjectService
{


    /*---------------------Store Project-----------------------------*/
     public function store($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('projects');

            Project::create([
                'name'=>$request->name,
                'skill_id'=>$request->skill_id,
                'image'=>$image,
                'url'=>$request->project_url
            ]);
            
            return redirect()->route('projects.index')->with(['message'=>' New Project Added Successfully']);
        }

        return redirect()->back();

    }




    /*----------------------Update Project-----------------------------------------*/
    public function update ($request,$id)
    {
        $project = Project::find($id);

        $image = $project->image;
        if (!$project ) {
            abort(404);
        }

        if($request->hasFile('image'))
        {
            Storage::delete($project->image);
            
            $image = $request->file('image')->store('projects');

        }


        $project->update(
            [
                'name'=>$request->name,
                'image'=>$image,
                'skill_id'=>$request->skill_id,
                'url'=>$request->project_url
            ]);


            return redirect()->route('projects.index')->with(['message'=>'Project Modified Successfully']);
    }




    /*---------------------Delete  Project-----------------------------*/
    public function delete($id)
    {
        $project = Project::find($id);

        if (!$project) {

            abort(404);
        }
        $project->delete();
        Storage::delete($project->image);
        return redirect()->back()->with(['message'=>'Project deleted Successfully']);
    }
}
