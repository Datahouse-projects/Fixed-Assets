@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div  ALIGN="CENTER" class="card-header">{{ __('Asset Details') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/assets">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Asset Name') }}</label>

                                <div class="col-md-6">
                                    <input name="name" type="text" class="form-control" name="name" >

                                </div>
                            </div><div class="form-group row">
                                <label for="size" class="col-md-4 col-form-label text-md-right">Size</label>
                                <div class="col-md-6">
                                    <input name="size" type="number" class="form-control">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cost" class="col-md-4 col-form-label text-md-right">{{ __('Asset Cost') }}</label>

                                <div class="col-md-6">
                                    <input name="cost" type="number" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="purdate" class="col-md-4 col-form-label text-md-right">{{ __('Date Purchased') }}</label>

                                <div class="col-md-6">
                                    <input name="purchase_date" type="date" class="form-control"  required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="expdate" class="col-md-4 col-form-label text-md-right">{{ __('Exipire Date') }}</label>

                                <div class="col-md-6">
                                    <input name="expire_date" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  required autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rendate" class="col-md-4 col-form-label text-md-right">{{ __('Renewer Date') }}</label>

                                <div class="col-md-6">
                                    <input name="renewer_date" type="date" class="form-control" required autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rfid" class="col-md-4 col-form-label text-md-right">{{ __('Asset RFID') }}</label>

                                <div class="col-md-6">
                                    <input name="rfid" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  required autofocus>

                                </div>
                            </div>
                                                       <div class="form-group row">
                                <label for="barcode" class="col-md-4 col-form-label text-md-right">{{ __('Asset Barcode') }}</label>

                                <div class="col-md-6">
                                    <input name="barcode" type="date" class="form-control" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="serial" class="col-md-4 col-form-label text-md-right">{{ __('Asset Serial') }}</label>

                                <div class="col-md-6">
                                    <input name="serial" type="date" class="form-control" required autofocus>

                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Assets Details') }}
                                    </button>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>






@endsection





