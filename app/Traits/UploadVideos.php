<?php

namespace App\Traits;

use Storage;


trait UploadVideos
{

    public function uploadVideo($uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }

    public function deleteVideo($folder = null, $disk = 'public', $filename = null)
    {
        Storage::disk($disk)->delete($folder.$filename);
    }

}