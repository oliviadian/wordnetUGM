<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Illuminate\Http\Request;

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

    public function adminHome()
    {
        return view('adminHome');
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('home');
    }
}
