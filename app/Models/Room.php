<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workspace;

class Room extends Model
{   
    protected $table= 'rooms';
    protected $fillable = [
        'id', 'room_image', 'room_type','room_capacity',
        'room_discription','rent_room',
        'room_price','room_price_time',
        'created_at', 'updated_at',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    // public function Workspace(){
    //     return $this->belongTo(related:'Workspace',foreignKey:'workspaces_id',localKey:'id');
    // }
}