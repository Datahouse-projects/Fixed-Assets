<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Psy\sh;


class Assets_vendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $vendors=Vendor::all();
      //  return view('Vendors.index',['vendors' => $vendors]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $vendors=Vendor::all();
        $assets = Asset::all();
        return view('vendors.create', ['vendors' => $vendors],['assets' => $assets]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        //  $asset = new AssetsController();

        // $asset->title = $request->get('name');
        // $asset->body = $request->get('assets_size');
        //   $assets->user_id = $request->get('id');
        // $post->slug = Slug::generateSlug($request->get('title'));

        // $asset->save();

        // return Redirect::route('admin.posts.index');
      $name=$request->input('name');
        $phone=$request->input('phone');
        $email=$request->input('email');
        $website=$request->input('website');

        DB::table('vendors')->insert(

            ['name' => $name,
                'phone' => $phone,
                'email' => $email,
                'website' => $website,

            ]


        );


        //$this->show();
       $vendors = Vendor::all();
        $assets = Asset::all();
        return view('vendors.show', ['vendors' => $vendors],['assets' => $assets]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()

    {

        $vendors = Vendor::all();
        $assets = Asset::all();
        return view('vendors.show', ['vendors' => $vendors],['assets' => $assets]);







        // $asset_manage = Asset::all();
        //return view('Assets.show')->with('assets', $asset_manage);
        //$assets=asset_manage::find($id);
        //$assets = DB::table('assets')->get();
        //return view ('Assets.show')->with('records',$assets);
        //$asset_manage = DB::table('assets')->get();
        //echo $asset_manage->name;

        //return view('Assets.show', ['assets' => $asset_manage]);

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



























