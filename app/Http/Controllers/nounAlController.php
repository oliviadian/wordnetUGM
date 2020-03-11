<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kata_noun;

class nounAlController extends Controller
{
    public function searchnounal(Request $request)
    {
        $kata = $request->input('searchnounal');

    if($kata){
        $noun = kata_noun::where('kata_dasar_n', 'LIKE', '%' . $kata . '%')
                        ->get();
        if(count($noun) >0){
            return view('pencarian-noun-al')->withDetails($noun)->withQuery($kata);
        }
    }
    return view('pencarian-noun-al')->withMessage("no data found");
    }
}
