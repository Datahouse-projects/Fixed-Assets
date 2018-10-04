@extends('layouts.app')

@section('content')



    <form class="form" method="post" action="location" >
        <div class="form-group">
            <label for="full_name" class="col-md-4 control-label" > LOCATION ID</label>

            <input id="location_id" class="col-md-2" type="number" name="full_name" value=" " >
        </div>
        <div class="form-group">
            <label for="asset_name" class="col-md-4 control-label">LOCATION NAME</label>

            <input id="location_name" type="text" class="col-md-2" name="asset_name" value=" " >
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


