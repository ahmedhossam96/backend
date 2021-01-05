<?php

namespace App\Traits;

Trait  ProductTrait
{
     function saveImage($img,$folder){
        //save photo in folder
        //time().'.'.request()->file('image')->getClientOriginalExtension();
        $file_extension = $img -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = $folder;
        $img-> move($path,$file_name);

        return $file_name;
    }


}