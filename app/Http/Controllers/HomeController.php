<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Illuminate\Http\Request;
use App\tambah_kata_n;
use App\tambah_kata_v;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('seputarlaman-al');
    }

    public function admin()
    {
        return view('adminHome');
    }

    public function adminHomeN()
    {
        $datanoun = tambah_kata_n::all(); 
        return view('adminNoun', ['hasilnoun'=>$datanoun]);
    }

    public function adminHomeV()
    {
        $dataverb = tambah_kata_v::all(); 
        return view('adminVerb', ['hasilverb'=>$dataverb]);
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('landingpage');
    }
}
