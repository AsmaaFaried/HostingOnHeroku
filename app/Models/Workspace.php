<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Workspace extends Model
{
    //

    protected $table= 'workspaces';
    protected $fillable = [
        'id',
        'profile_picture',
        'location',
        'mobile_one',
        'mobile_two',
        'open_time' ,
        'close_time',
        'serve_food',
        'wifi',
        'created_at',
        'updated_at',
    
    ];
    protected $hidden = ['created_at',
    'updated_at',];
    ////////////// Begin Relation between workspaces and its profile picture //////////////
    // public function Workspaceprofilepicture(){
    //     return $this->hasOne(related:'App\Models\Workspaceprofilepicture',foreignKey:'workspaces_id');
    // }

    ///////////// End Relation between workspaces and its profile picture //////////////



    // Begin Relation between workspaces and its Rooms //

    // public function Room(){
    //     return $this->hasMany(related:'Room',foreignKey:'workspaces_id',localKey:'id');
    // }


    // End  Relation between workspaces and its Rooms //

}
