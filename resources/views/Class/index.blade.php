@extends('layouts.app')

@section('content')
@endsection
      <form class="form" method="POST" action="store">
          <div class="form-group">
        <label for="full_name" class="col-md-4 control-label" > Asset ID</label>
        <div class="col-md-2">
            <input id="asset_id" type="number" class="form-control" name="full_name" value=" " >
        </div>
        <label for="asset_name" class="col-md-4 control-label">Asset Name</label>

        <div class="col-md-2">
            <input id="asset_name" type="text" class="form-control" name="asset_name" value=" " >
        </div>
        <label for="size" class="col-md-4 control-label">Size</label>

        <div class="col-md-2">
            <input id="asset_size" type="number" class="form-control" name="asset_size" value=" " >
        </div>
        <label for="asset_cost" class="col-md-4 control-label">Cost</label>

        <div class="col-md-2">
            <input id="asset_cost" type="number" class="form-control" name="asset_cost" value=" " >
        </div>
        <label for="asset_name" class="col-md-4 control-label">Date Purchased</label>

        <div class="col-md-2">
            <input id="asset_name" type="date" class="form-control" name="asset_name" value=" " >
        </div>
        <label for="exipre_date" class="col-md-4 control-label">Exipire Date</label>

        <div class="col-md-2">
            <input id="exipre_date" type="date" class="form-control" name="exipre_date" value=" " >
        </div>
        <label for="renewer_date" class="col-md-4 control-label">Renewer Date</label>

        <div class="col-md-2">
            <input id="renewer_date" type="date" class="form-control" name="renewer_date" value=" " >
        </div>


    </div>
          <div class="form-group">

              <label for="disposal_date"class="col-md-4 control-label">Date Disposal</label>

              <div class="col-md-2">
                  <input id="disposal_date" type="date" class="form-control" name="disposal_date" value="" >
              </div>

    <div class="form-group">
        <label for="current_cost" class="col-md-4 control-label">Current Cost</label>

        <div class="col-md-2">
            <input id="current_cost" type="number" class="form-control" name="current_costl" value=" " >
        </div>
    </div>


    </div>


    {{-- SUBMIT BUTTON--}}
    <div class="form-group">
        <div class="col-md-9 col-md-offset-9">
            <button type="submit" class="btn btn-primary">
                Add Asset Details
            </button>
        </div>
    </div>
</form>







