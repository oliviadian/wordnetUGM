<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kata_verb;

class verbController extends Controller
{
    public function index(){
        return view('pencarian-verb');
    }

    public function searchverb(Request $request)
    {
        $kata = $request->input('searchverb');

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
