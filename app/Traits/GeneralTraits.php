<?php

namespace App\Traits;
use App\User;


Trait GeneralTraits
{
    public function returnError($errNum,$msg){
        return response()->json([
        'status' =>false,
        'errNum' =>$errNum,
        'msg' => $msg,
        ]);
    }


    public function returnSuccessMessage($msg ="",$errNum="002"){
        return response()->json([
        'status' =>true,
        'errNum' =>$errNum,
        'msg' => $msg,
        ]);
    }

    public function returnData($key,$value,$msg =""){
        return response()->json([
        'status' =>true,
        'errNum' =>"002",
        'msg' => $msg,
        $key=>$value,
        ]);
    }

    
}
