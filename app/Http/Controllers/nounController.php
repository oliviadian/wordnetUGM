<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kata_noun;

class nounController extends Controller
{
    public function index(){
        return view('pencarian-noun');
    }

    public function searchnoun(Request $request)
    {
        
        $kata = $request->input('searchnoun');

    if($kata){
        $noun = kata_noun::where('kata_dasar_n', 'LIKE', '%' . $kata . '%')
                        ->get();
        if(count($noun) >0){
            return view('pencarian-noun')->withDetails($noun)->withQuery($kata);
        }
    }
    return view('pencarian-noun')->withMessage("no data found");
    }
}
