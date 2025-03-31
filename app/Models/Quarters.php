<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarters extends Model
{
    use HasFactory;

    protected $fillable = ['namenom_cuartel', 'ubic'];

       //uno a muchos con soldiers
public function soldier(){
    return $this->belongsTo('App\Models\Soldier');
}
//MUCHOS A MUCHOS 
public function companies(){
    return $this->belongsToMany('App\Models\Companies');
  }


}
