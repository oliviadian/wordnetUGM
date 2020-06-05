<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\kata_noun;
use App\hipernim_noun;

class nounAlController extends Controller
{
    public function searchnounal(Request $request)
    {
        $kata = $request->input('searchnounal');

        if($kata){

            $noun = kata_noun::with('hipernim')->where('kata_dasar_n', 'LIKE', '%' . $kata . '%')
                            ->get();
            
            if(count($noun)>0){
                return view('pencarian-noun-al')->withDetails($noun)->withQuery($kata);
            } else {
                Session::flash('error','Maaf kata yang anda cari belum terdapat di basis data kami.');
                return view('pencarian-noun-al');
            }
            
        }  else return view('pencarian-noun-al');

    }
    
}
