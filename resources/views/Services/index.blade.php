@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Assets Services Deatils') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Service Provider') }}</label>

                                <div class="col-md-6">
                                    <input id="serprovider" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="size" class="col-md-4 col-form-label text-md-right">Service Cost</label>
                                <div class="col-md-6">
                                    <input id="servicecost" type="number" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Service Date') }}</label>

                                <div class="col-md-6">
                                    <input id="servicedate" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Item Serviced') }}</label>

                                <div class="col-md-6">
                                    <input id="itemserviced" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Service Details') }}
                                    </button>
                                    <button type="submit" class="btn btn-primary" >
                                        {{ __('  Show Service  Details ') }}
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









