<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class soldiers extends Model
{
  
    
  //UNO A MUCHOS 
   
  public function armycorps(){
    return $this->hasMany('App\Models\Armycorp');
  }

  public function quartes(){
    return $this->hasMany('App\Models\Quarte');
  }

  public function companies(){
    return $this->hasMany('App\Models\Companie');
  }

  //MUCHOS A MUCHOS 

  public function services(){
    return $this->belongsToMany('App\Models\Services');
  }
}