<?php
namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

Trait TraitImage
{

    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'pu   lic', $filename = null)
    {
        $name = $filename;

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }




}



