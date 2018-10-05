@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Asset Details') }}</div>

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
                                    <input id="asset_size" type="number" class="form-control">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cost" class="col-md-4 col-form-label text-md-right">{{ __('Asset Cost') }}</label>

                                <div class="col-md-6">
                                    <input id="asset_cost" type="number" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="purdate" class="col-md-4 col-form-label text-md-right">{{ __('Date Purchased') }}</label>

                                <div class="col-md-6">
                                    <input id="purdate" type="date" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="expdate" class="col-md-4 col-form-label text-md-right">{{ __('Exipire Date') }}</label>

                                <div class="col-md-6">
                                    <input id="expdate" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rendate" class="col-md-4 col-form-label text-md-right">{{ __('Renewer Date') }}</label>

                                <div class="col-md-6">
                                    <input id="rendate" type="date" class="form-control" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="disdate" class="col-md-4 col-form-label text-md-right">{{ __('Date Disposal') }}</label>

                                <div class="col-md-6">
                                    <input id="disdate" type="date" class="form-control"  required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="curdate" class="col-md-4 col-form-label text-md-right">{{ __('Current Cost') }}</label>

                                <div class="col-md-6">
                                    <input id="curdate" type="number" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Model Number') }}</label>

                                <div class="col-md-6">
                                    <input id="modnumber" type="number" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Model Name') }}</label>

                                <div class="col-md-6">
                                    <input id="modname" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Asset Picture') }}</label>

                                <div class="col-md-6">
                                    <input id="asset_pic" type="number" class="form-control" required>
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Asset Details') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection





