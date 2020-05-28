<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\kata_verb;
use App\hipernim_verb;

class verbAlController extends Controller
{
    public function searchverbal(Request $request)
    {
            $kata = kata_verb::with('hipernim')->where('kata_dasar_v', $request->searchverbal)->get();
            // dd($kata);
            return view('pencarian-verb-al', compact ('kata'));
 
    }
}

