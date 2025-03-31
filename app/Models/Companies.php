<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $fillable = ['acti_pri_comp'];


       //uno a muchos con soldiers
public function soldier(){
    return $this->belongsTo('App\Models\Soldier');
}

//MUCHOS A MUCHOS 
public function quarters(){
    return $this->belongsToMany('App\Models\quarters');
  }
}
