<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tambah_kata_n;
use DB;

class tambahKatanController extends Controller
{
    public function isi(Request $request)
	{
		
		DB::table('tambah_kata_nouns')->insert([
			'isi' => $request->isi,
        ]);
        
		
		return redirect('/pencarian/noun/al');
 
	}
}
