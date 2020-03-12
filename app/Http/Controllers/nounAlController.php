<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\kata_noun;
use App\hipernim_noun;

class nounAlController extends Controller
{
    public function searchnounal(Request $request)
    {
        // $kata = kata_noun ::all();

        // return view('pencarian-noun-al', ['kata_noun' => $kata]);
        $kata = $request->input('searchnounal');

        if($kata){
            $noun = kata_noun::where('kata_dasar_n', 'LIKE', '%' . $kata . '%')
                            ->get();
            if(count($noun) >0){
                return view('pencarian-noun-al')->withDetails($noun)->withQuery($kata);
            }
        }
        return view('pencarian')->withMessage("no data found");
    }
    
}

//     $kata = $request->input('searchnounal');

    // if($kata){
    //     $result = DB::table('kata_nouns', 'hipernim_nouns')
    //         // ->join('contacts', 'users.id', '=', 'contacts.user_id')
    //         // ->join('orders', 'users.id', '=', 'orders.user_id')
    //         ->select('kata_nouns.*', 'hipernim_nouns.*')
    //         ->where('kata_nouns.kata_dasar_n', $kata)
    //         ->get();
    //     if(count($result) >0){
    //         return view('pencarian-noun-al')->withDetails($result)->withQuery($kata);
    //     }
    // }
    // return view('pencarian-noun-al')->withMessage("no data found");
    
    // $result = DB::table('kata_noun', 'hipernim_noun')
    //         // ->join('contacts', 'users.id', '=', 'contacts.user_id')
    //         // ->join('orders', 'users.id', '=', 'orders.user_id')
    //         ->select('kata_noun.*', 'hipernim_noun.*')
    //         ->get();
