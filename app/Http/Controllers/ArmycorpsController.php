<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Armycorps;

class ArmycorpsController extends Controller
{
    public function create()
    {
        return view('armycorps');
    }

    public function store(Request $request)
    {
        $armycorps = new Armycorps();
        $armycorps->denom_ce = $request->denom_ce;
        $armycorps->save();

        return $armycorps;
    }
}
