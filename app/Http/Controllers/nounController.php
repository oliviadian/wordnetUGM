<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noun;

class nounController extends Controller
{
    public function search(Request $request)
    {
        $kata = $request->input('search');
    if($kata){
        $user = noun::where('kategori', 'LIKE', '%' . $kata . '%')
                        ->get();
        if(count($user) >0){
            return view('pencarian')->withDetails($user)->withQuery($kata);
        }
    }
    return view('pencarian')->withMessage("no data found");
    }
}
