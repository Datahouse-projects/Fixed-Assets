@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Asset Details') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/class">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Buildings ') }}</label>
                                <div class="col-md-2">
                                    <input name="building" type="text" class="form-control"  >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Plant and Machinery ') }}</label>
                                <div class="col-md-2">
                                    <input name="machinery" type="text" class="form-control"  >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Funiture and Fittings ') }}</label>
                                <div class="col-md-2">
                                    <input name="furniture" type="text" class="form-control"  >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Intangible ') }}</label>
                                <div class="col-md-2">
                                    <input name="intangible" type="text" class="form-control"  >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Heavy Machine') }}</label>
                                <div class="col-md-2">
                                    <input name="heavy" type="text" class="form-control"  >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Computer and Data Eduipments ') }}</label>
                                <div class="col-md-2">
                                    <input name="computer" type="text" class="form-control"  >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Buildings of Permanent Nature ') }}</label>
                                <div class="col-md-2">
                                    <input name="permanent" type="text" class="form-control"  >
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add class deatails and ratio') }}
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





