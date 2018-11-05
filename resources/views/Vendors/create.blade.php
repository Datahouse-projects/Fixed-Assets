@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div  ALIGN="CENTER" class="card-header">{{ __('ASSET VENDORS') }}</div>

                    <div class="card-body">

                        <form method="POST" action="/vendors">
                            @csrf
                        <table class="table table-striped table-bordered table-hover">
                            <tr >
                                <td bgcolor="aqua"><b>VENDOR DETAILS</b></td>
                            </tr>

                            <tr>
                            <td>Select Asset Name:  <select name="type"  class="form-control">
                                    @foreach($assets as $assets)
                                        <option value="{{$assets->name}}">{{$assets->name}}</option>
                                    @endforeach
                                </select>
                                </select>
                            </td>

                            </tr>


                            <tr >
                                <td>Vendor Name:<input name="name" type="text" class="form-control" class="col-md-6" ></td>
                            </tr>

                            <tr >
                                <td>Phone Contact:<input name="phone" type="number" class="form-control" class="col-md-6" ></td>
                            </tr>
                            <tr >
                                <td>Email:<input name="email" type="text" class="form-control" class="col-md-6" ></td>
                            </tr>

                            <tr >
                                <td>Website:<input name="website" type="text" class="form-control" class="col-md-6" ></td>
                            </tr>

                            <tr >
                                <td > <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                    <button type="submit" class="btn btn-primary" bgcolor="aqua">
                                        {{ __('Cancel') }}
                                    </button></td>
                            </tr>


                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection





