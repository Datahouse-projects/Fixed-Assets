<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Asset_locationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $assets = Asset::all();
        return view('Locations.index',['assets' => $assets]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $locations=Location::all();
        $assets = Asset::all();
        return view('Locations.create',['locations' => $locations],['assets' => $assets]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->input('name');
        DB::table('locations')->insert(

            [      'name' => $name,


            ]


        );
        //$this->show();
      $locations = Location::all();
       //return view('Locations.create');
      $assets = Asset::all();
      return view('Locations.create', ['locations' => $locations],['assets' => $assets]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view ('Locations.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
