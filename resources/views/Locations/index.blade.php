@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div  ALIGN="CENTER" class="card-header">{{ __('') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/locations">
                        <table class="table table-striped table-bordered table-hover">
                            <tr >
                                <td bgcolor="aqua"><b>ASSET LOCATION</b></td>
                            </tr>
                            <tr >
                                <td>Select Asset Name:  <select name="type"  class="form-control">
                                        @foreach($assets as $assets)
                                            <option value="{{$assets->name}}">{{$assets->name}}</option>
                                        @endforeach
                                    </select>
                                    </select>
                                </td>
                            </tr>
                            <tr >
                                <td>Fill Location: <input name="name" type="text" class="form-control" name="name" >
                                </td>
                            </tr>

                            <tr ><td>
                                    <button type="submit" class="btn btn-primary"bgcolor="aqua">
                                        {{ __('Add Location') }}
                                    </button>
                                </td>

                            </tr>

                        </table>
                        </form>


                        <table class="table table-striped table-bordered table-hover">

                            <tr >
                                <td> Asset Name</td>
                                <td> Location Name</td>
                            </tr>
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





