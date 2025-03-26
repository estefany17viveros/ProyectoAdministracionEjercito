<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class CompaniesController extends Controller
{
    public function create()
    {
        return view('companies');
    }

    public function store(Request $request)
    {
        $companies = new Companies();
        $companies->acti_pri_comp = $request->acti_pri_comp;
        $companies->save();

        return $companies;
    }
}
