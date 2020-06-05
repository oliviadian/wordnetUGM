<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\kata_verb;
use App\hipernim_verb;

class verbAlController extends Controller
{
    public function searchverbal(Request $request)
    {
        $kata = $request->input('searchverbal');

        if($kata){

            $verb = kata_verb::with('hipernim')->where('kata_dasar_v', 'LIKE', '%' . $kata . '%')
                            ->get();
            
            if(count($verb)>0){
                return view('pencarian-verb-al')->withDetails($verb)->withQuery($kata);
            } else {
                Session::flash('error','Maaf kata yang anda cari belum terdapat di basis data kami.');
                return view('pencarian-verb-al');
            }
            
        }  else return view('pencarian-verb-al');
 
    }
}

