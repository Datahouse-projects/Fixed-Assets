@extends('layouts.app')

@section('content')
@endsection
      <form class="form" method="POST" action="">
          <div class="form-group">
        <label for="full_name" class="col-md-4 control-label" > Asset ID</label>
        <div class="col-md-2">
            <input id="full_name" type="number" class="form-control" name="full_name" value=" " >
        </div>
        <label for="email" class="col-md-4 control-label">Asset Name</label>

        <div class="col-md-2">
            <input id="email" type="text" class="form-control" name="email" value=" " >
        </div>
        <label for="email" class="col-md-4 control-label">Size</label>

        <div class="col-md-2">
            <input id="email" type="number" class="form-control" name="email" value=" " >
        </div>
        <label for="email" class="col-md-4 control-label">Cost</label>

        <div class="col-md-2">
            <input id="email" type="number" class="form-control" name="email" value=" " >
        </div>
        <label for="email" class="col-md-4 control-label">Date Purchased</label>

        <div class="col-md-2">
            <input id="email" type="date" class="form-control" name="email" value=" " >
        </div>
        <label for="email" class="col-md-4 control-label">Cost</label>

        <div class="col-md-2">
            <input id="email" type="number" class="form-control" name="email" value=" " >
        </div>
        <label for="email" class="col-md-4 control-label">Cost</label>

        <div class="col-md-2">
            <input id="email" type="number" class="form-control" name="email" value=" " >
        </div>


    </div>

    <div class="form-group">
        <label for="email" class="col-md-4 control-label">Cost</label>

        <div class="col-md-2">
            <input id="email" type="number" class="form-control" name="email" value=" " >
        </div>
    </div>

    <div class="form-group">

        <label for="role"class="col-md-4 control-label">Date Disposal</label>

        <div class="col-md-2">
            <input id="role" type="pas" class="form-control" name="role" value="" >
        </div>
    </div>


    {{-- SUBMIT BUTTON--}}
    <div class="form-group">
        <div class="col-md-9 col-md-offset-9">
            <button type="submit" class="btn btn-primary">
                Add
            </button>
        </div>
    </div>
</form>







