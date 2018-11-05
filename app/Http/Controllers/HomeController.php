<?php

namespace App\Http\Controllers;

use App\Location;
use App\Asset;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // $assets = Asset::all();
       // return view('Assets.show', ['assets' => $assets]);
        $assets = Asset::all();

      //  $assets = DB::table('sub_category')->where('id')->count();

        return view('home', ['assets' => $assets]);
    }
    public function show()
    {

        // $assets = Asset::all();
        // return view('Assets.show', ['assets' => $assets]);
        $assets = Asset::all();
        $location = Location::all();

        //  $assets = DB::table('sub_category')->where('id')->count();

        return view('home', ['assets' => $assets]);
    }
}
