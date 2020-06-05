<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
            } else {
                Session::flash('error','Maaf kata yang anda cari belum terdapat di basis data kami.');
	            return view('pencarian-verb');
            }

        } return view('pencarian-verb');
    }
}
