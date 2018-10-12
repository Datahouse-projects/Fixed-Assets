
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

                        <tr >
                            <td> Asset name</td>
                            <td>Size</td>
                            <td>cost</td>
                            <td>Date Purchased</td>
                            <td>Date Exipired</td><td>Date Renewered</td>
                            <td>Asset RFID</td>
                            <td>Asset Barcode</td><td>Serial No.</td>
                        </tr>
                        @foreach($assets as $assets)
                            <tr>
                                <td> {{ $assets->name }}</td>
                                <td> {{ $assets->size }}</td>
                                <td> {{ $assets->cost }}</td>
                                <td> {{ $assets->purchase_date }}</td>
                                <td>{{ $assets->expire_date }}</td>
                                <td>{{ $assets->renewer_date }}</td>

                                <td> {{ $assets->rfid }}</td>
                                <td>{{ $assets->barcode }}</td>
                                <td>{{ $assets->serial }}</td>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>


@endsection



