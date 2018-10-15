
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-19">
                <div class="card">
                    <div align="left" class="card-header">{{ __('Asset Details') }}</div>
                    <div align="Right" class="card-header">
                        <a href="{{route('assets.create')}}"><button type="submit" class="btn btn-primary">
                                {{ __('Add asset') }}
                            </button></a>
                    </div>


                    <table class="table table-striped table-bordered table-hover">

                        <tr ><td>Serial No.</td>
                            <td> Asset name</td>
                            <td>Asset Type</td>
                            <td>cost</td>
                            <td>Manufacture</td>
                            <td>Status</td>
                        </tr>
                        @foreach($assets as $assets)
                            <tr>
                                <td> {{ $assets->serial }}</td>
                                <td> {{ $assets->name }}</td>
                                <td> {{ $assets->type}}</td>
                                <td> {{ $assets->cost }}</td>
                                <td> {{ $assets->manufacture }}</td>
                                <td> {{ $assets->status }}</td>
                                <td> View</td>
                                <td> Delete</td>





                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>


@endsection



