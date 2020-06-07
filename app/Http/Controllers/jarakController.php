<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

        if($kata1 && $kata2){
          
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
                    Session::flash('error','Maaf jarak kata tidak dapat ditemukan.');
                    return view('jarakkata-al');
                }

            } else {
                Session::flash('error','Maaf kata yang anda hitung tidak terdapat di basis data kami.');
                return view('jarakkata-al');
            }
        }

    }
}
