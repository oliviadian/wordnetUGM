<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kata_verb;

class verbAlController extends Controller
{
    public function searchverbal(Request $request)
    {
        $kata = $request->input('searchverbal');

    if($kata){
        $verb = kata_verb::where('kata_dasar_v', 'LIKE', '%' . $kata . '%')
                        ->get();
        if(count($verb) >0){
            return view('pencarian-verb')->withDetails($verb)->withQuery($kata);
        }
    }
    return view('pencarian-verb')->withMessage("no data found");
    }
}
