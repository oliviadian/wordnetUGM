<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kata_noun;
use App\hipernim_noun;

class jarakController extends Controller
{
    public function jarak (Request $request){

        $pertama = $request->input('katasatu');
        $kedua = $request->input('katadua');

        if($pertama && $kedua){

            $kata1 = kata_noun::
                    with('hipernim')
                    ->where('kata_dasar_n', 'LIKE', '%'. $pertama . '%')
                    ->first();
            
            $kata2 = kata_noun::
                    with('hipernim')
                    ->where('kata_dasar_n', 'LIKE', '%'. $kedua . '%')
                    ->first();

            $kedalaman = 9999;
            foreach($kata1->hipernim as $satu){
                foreach($kata2->hipernim as $dua){
                    if(strtolower($satu->hipernim_n) == strtolower($dua->hipernim_n)){

                        // dd('ada');
                        $temp = $satu->kedalaman_kata + $dua->kedalaman_kata;
                        if($temp < $kedalaman){
                            $kedalaman = $temp;
                        }
                    } 
                } 
            }

            if ($kedalaman != 9999){
                return view('jarakkata-al', compact('kedalaman'));
            }else {
                return view('jarakkata-al')->withMessage("no data found");
            }
        }
    }
}
