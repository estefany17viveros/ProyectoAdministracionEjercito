<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //MUCHOS A MUCHOS 

    public function soldiers(){
        return $this->belongsToMany('App\Models\Soldiers');
    }
}
