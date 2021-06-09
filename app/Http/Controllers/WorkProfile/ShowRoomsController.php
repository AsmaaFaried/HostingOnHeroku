<?php

namespace App\Http\Controllers\WorkProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowRoomsController extends Controller
{
    //

    public function create(){
        return view('dashboard/ShowRooms');
    }

    public function store(){
        
    }
}
