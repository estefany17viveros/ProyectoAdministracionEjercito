<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armycorps extends Model
{
    use HasFactory;

    protected $fillable = ['denom_ce'];


    //uno a muchos con soldiers
public function soldier(){
    return $this->belongsTo('App\Models\Soldier');
}
}

