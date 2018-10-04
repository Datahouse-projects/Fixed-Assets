@extends('layouts.app')

@section('content')



      <form class="form" method="POST" action="store" >
<div class="form-group">
        <label for="full_name" class="col-md-4 control-label" > Asset ID</label>

            <input id="asset_id" class="col-md-2" type="number" name="full_name" value=" " >
        </div>
          <div class="form-group">
        <label for="asset_name" class="col-md-4 control-label">Asset Name</label>


            <input id="asset_name" type="text" class="col-md-2" name="asset_name" value=" " >
        </div>
          <div class="form-group">
        <label for="size" class="col-md-4 control-label">Size</label>


            <input id="asset_size" type="number" class="col-md-2"  name="asset_size" value=" " >
        </div>
          <div class="form-group">
        <label for="asset_cost" class="col-md-4 control-label">Cost</label>


            <input id="asset_cost" type="number" class="col-md-2"  name="asset_cost" value=" " >
        </div>
          <div class="form-group">
        <label for="asset_name" class="col-md-4 control-label">Date Purchased</label>


            <input id="asset_name" type="date"class="col-md-2"  name="asset_name" value=" " >
        </div>
          <div class="form-group">
        <label for="exipre_date" class="col-md-4 control-label">Exipire Date</label>


            <input id="exipre_date" type="date" class="col-md-2"  name="exipre_date" value=" " >
        </div>
          <div class="form-group">
        <label for="renewer_date" class="col-md-4 control-label">Renewer Date</label>


            <input id="renewer_date" type="date" class="col-md-2"  name="renewer_date" value=" " >
        </div>

          <div class="form-group">
              <label for="disposal_date"class="col-md-4 control-label">Date Disposal</label>
                  <input id="disposal_date" type="date" class="col-md-2" name="disposal_date" value="" >
              </div>

    <div class="form-group">
        <label for="current_cost" class="col-md-4 control-label">Current Cost</label>
            <input id="current_cost" type="number" class="col-md-2"  name="current_cost" value=" " >
        </div>
    </div>


    </div>


    {{-- SUBMIT BUTTON--}}
    <div class="form-group">
        <div class="col-md-9">
            <button type="submit" class="btn btn-primary">
                Add Asset Details
            </button>
        </div>
    </div>
</form>

@endsection





