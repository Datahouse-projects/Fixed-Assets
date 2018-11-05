@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div align="left" class="card-header">{{ __('ASSET VENDOR') }}</div>
                    <div align="Right" class="card-header">

                    </div>


                    <table class="table table-striped table-bordered table-hover">


                        <tr >
                            <td>Asset name</td>
                            <td> Vendor name</td>
                            <td>Contacts</td>
                            <td>Email</td>
                            <td>Website</td>

                        </tr>

                            @foreach($assets as $assets)
                        <tr >

                            <td>{{$assets->name}}</td>
                            @endforeach
                            @foreach($vendors as $vendors)
                            <td>{{$vendors->name}}</td>
                            <td>{{$vendors->phone}}</td>
                            <td>{{$vendors->email}}l</td>
                            <td>{{$vendors->website}}</td>

                        </tr>


                        @endforeach

                    </table>
                </div>
            </div>
        </div>


@endsection
