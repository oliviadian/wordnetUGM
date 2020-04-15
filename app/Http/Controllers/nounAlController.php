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
        $kata = kata_noun::with('hipernim')->where('kata_dasar_n', $request->searchnounal)->get();
        // dd($kata);
        return view('pencarian-noun-al', compact ('kata'));
       
    }
    
}
