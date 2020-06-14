<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tambah_kata_v;
use DB;

class tambahKatavController extends Controller
{
    public function isi(Request $request)
	{
		
		DB::table('tambah_kata_verbs')->insert([
			'isi' => $request->isi,
        ]);
        
		return redirect('/pencarian/verb/al');
 
	}
}
