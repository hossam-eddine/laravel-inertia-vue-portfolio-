<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "ID"=>$this->id,
            "NAME"=>$this->name,
            "URL"=>$this->url,
            "IMAGE"=>asset('/storage/'.$this->image),
            "Skill"=>new SkillResource($this->whenLoaded('skill'))
        ];
    }
}
