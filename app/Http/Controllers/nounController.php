<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kata_noun;

class nounController extends Controller
{
    public function search(Request $request)
    {
        $kata = $request->input('search');

    if($kata){
        $noun = kata_noun::where('kata_dasar_n', 'LIKE', '%' . $kata . '%')
                        ->get();
        if(count($noun) >0){
            return view('pencarian')->withDetails($noun)->withQuery($kata);
        }
    }
    return view('pencarian')->withMessage("no data found");
    }
}
