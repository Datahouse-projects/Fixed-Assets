@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div  ALIGN="CENTER" class="card-header">{{ __('') }}</div>

                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr >
                                <td bgcolor="aqua"><b>ASSET LOCATION</b></td>
                            </tr>
                            <tr >
                                <td>Search By:<input name="name" type="text" class="form-control" class="col-md-6"name="name" ></td>
                            </tr>

                            <tr ><td>
                                    <button type="submit" class="btn btn-primary"bgcolor="aqua">
                                        {{ __('Create Location') }}
                                    </button>
                                </td>

                            </tr>

                        </table>


                        <table class="table table-striped table-bordered table-hover">

                            <tr >
                                <td> Location Name</td></tr>
                            <tr>
                                <td>Select</td>
                                <td>Dar Es Salaam</td>
                            </tr>

                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection





