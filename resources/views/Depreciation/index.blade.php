@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-19">
                <div class="card">
                    <div align="left" class="card-header">{{ __('Asset Details') }}</div>
                    <div align="Right" class="card-header">

                    </div>


                    <table class="table table-striped table-bordered table-hover">

                        <tr >
                            <td> Asset name</td>
                            <td>Purchase Price</td>
                            <td>Expected Life</td>
                            <td>Manufacture</td>
                            <td>Status</td>
                        </tr>
                        @foreach($assets as $assets)
                            <tr>
                                <td> {{ $assets->name }}</td>
                                <td> {{ $assets->cost}}</td>
                                <td> {{ $assets->expected}}</td>
                                <td> {{ $assets->manufacture }}</td>
                                <td> {{ $assets->status }}</td>
                                <td>  <a href="{{route('assets.create')}}">Run Depreciation</a></td>
                                <td> Delete</td>





                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>


@endsection



