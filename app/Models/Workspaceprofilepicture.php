<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workspaceprofilepicture extends Model
{
    protected $table='workspaceprofilepictures';
    protected $fillable = [
        'id',
        'work_picture',
        'workspaces_id',
        'created_at',
        'updated_at',
    ];
    protected $hidden = ['created_at','updated_at'];
    public function Workspace(){
        return $this->belongTo(related:'App\Models\Workspace',foreignKey:'workspaces_id');
    }

}

