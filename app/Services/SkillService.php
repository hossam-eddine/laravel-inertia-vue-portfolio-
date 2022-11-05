<?php
namespace App\Services;

use App\Models\Skill;
use Illuminate\Support\Facades\Storage;

Class SkillService
{

    /**
     * Store a newly created resource in storage.
     *
    **/
    public function store ($request)
    {
        if ($request->hasFile('image')) {

            $image = $request->file('image')->store('skills');

            Skill::create([
                'name'=>$request->name,
                'image'=>$image
            ]);
            return redirect(route('skills.index'));
        }
        return redirect()->back()->with(['message'=>'Skill Added Successfully']);


    }

     /**
     * Update the specified resource in storage.
     **/
    public function update($request,$id)
    {

        $skill = Skill::find($id);

        //check if the skill exists in the database
        if (!$skill) {
            abort(404);
        }


        $image = $skill->image;




        //check if the image selected
        if($request->hasFile('image'))
        {
            //delete the file from storage
            Storage::delete($skill->image);


            //insert the new image into the database

            $image = $request->file('image')->store('skills');
        }

        $skill->update([
            'name'=>$request->name,
            'image'=>$image
        ]);

        return redirect()->route('skills.index')->with(['message'=>'Skill Updated  Successfully']);

    }


    /**
     * Remove the specified resource from storage.
     **/

     public function delete ($id)
     {
        $skill = Skill::find($id);

        if (!$skill) {
            abort(404);
        }
       $skill->delete();
       Storage::delete($skill->image);

        return redirect()->back()->with(['message'=>'Skill deleted Successfully']);
     }
}
