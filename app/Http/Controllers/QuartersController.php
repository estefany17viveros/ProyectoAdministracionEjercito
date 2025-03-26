<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quarter;

class QuartersController extends Controller
{
    public function create()
    {
        return view('Quarters');
    }

    public function store(Request $request)
    {
        $quarter = new Quarter();
        $quarter->quarter_nom_cuartel = $request->quarter_nom_cuartel;
        $quarter->quarter_ubic = $request->quarter_ubic;
        
        $quarter->save();

        return $quarter;
    }
}
