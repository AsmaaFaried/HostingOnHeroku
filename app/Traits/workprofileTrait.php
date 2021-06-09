<?php

namespace App\Traits;



Trait workprofileTrait
{
    public function saveImage($photo,$folder){
        
        $file_extension = $photo->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = $folder;
       
        $photo->move($path,$file_name)->fit(600, 360);
        return $file_name;


       
    }
   
}
