
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div align="left" class="card-header">{{ __('ASSET VENDOR') }}</div>
                    <div align="Right" class="card-header">
                        <a href="{{route('vendors.create')}}"><button type="submit" class="btn btn-primary">
                                {{ __('Add Vendor') }}
                            </button></a>
                    </div>


                    <table class="table table-striped table-bordered table-hover">

                        <tr >
                            <td> Vendor name</td>
                            <td>Contacts</td>
                            <td>Email</td>
                            <td>Website</td>

                        </tr>

                    </table>

                </div>
            </div>
        </div>


@endsection



