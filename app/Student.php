<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded =[];

    public function classroom(){
        return $this->belongsTo(Classroom::class);

    }
}
