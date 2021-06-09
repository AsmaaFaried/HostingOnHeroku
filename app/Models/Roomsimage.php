<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roomsimage extends Model
{
    //
    protected $fillable = [
        'id', 'rooms_id', 'room_image',
        'created_at', 'updated_at',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function Workspace(){
        return $this->belongTo(related:'Workspace',foreignKey:'workspaces_id',localKey:'id');
    }
}
