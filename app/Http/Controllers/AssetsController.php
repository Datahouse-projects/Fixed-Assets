<?php

namespace App\Http\Controllers;

use App\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Psy\sh;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $assets=Asset::all();
        return view('Assets.index',['assets' => $assets]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $assets=Asset::all();
       return view('Assets.create',['assets' => $assets]);

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
      $manufacture=$request->input('manufacture');

        $cost=$request->input('cost');
        $model=$request->input('model');
        $status=$request->input('status');
        $condition=$request->input('condition');
        $type=$request->input('type');
        $expected=$request->input('expected');
        $old=$request->input('old');
        $size=$request->input('size');
        $rfid=$request->input('rfid');
        $barcode=$request->input('barcode');
        $serial=$request->input('serial');
        $purchase_date=$request->input('purchase_date');
        $expire_date=$request->input('expire_date');
         $renewer_date=$request->input('renewer_date');
          DB::table('assets')->insert(

        [      'name' => $name,
             'size' => $size,
             'cost' => $cost,
            'model' => $model,
            'status' => $status,
            'manufacture' => $manufacture,
            'condition' => $condition,
            'type' => $type,
            'expected' => $expected,
            'old' => $old,
             'purchase_date' => $purchase_date,
             'expire_date' => $expire_date,
             'renewer_date' => $renewer_date,
            'rfid' => $rfid,
             'barcode' => $barcode,
             'serial' => $serial,


         ]


);
  //$this->show();
        $assets = Asset::all();
        return view('Assets.show', ['assets' => $assets]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()

    {

     return view ('Assets.show');
       // $assets = Asset::all();
       // return view('Assets.show', ['assets' => $assets]);







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




































