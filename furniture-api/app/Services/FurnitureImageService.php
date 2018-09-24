<?php

namespace App\Services;

class FurnitureImageService {

    public function getExtension($image)
    {
        $mimetype = $image->mime();
        $exploded = explode('/', $mimetype);
        $extension = $exploded[1];

        return $extension;
    }

    public function getPath($fileName)
    {
        
        $path = public_path().'/images/'.$fileName;

        return $path;
    }

    public function getFileName($extension)
    {
        $fileName = str_random().'.'.$extension; 

        return $fileName;
    }

}