<?php

namespace App\Http\Controllers\WorkProfile;

use App\Http\Controllers\Controller;
use App\Models\Workspace;
use Illuminate\Http\Request;

class WorkspaceprofilepictureController extends Controller
{
    public function show(){
        return view('dashboard/addimage');
    }
    public function WorkspaceHasOneImageProfile(){
        $Workspace = Workspace::find('work_picture');
        return $Workspace;

    }
}
