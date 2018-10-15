@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" bgcolor="aqua">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" >Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        Current assets:     23   <br>
                        Total Value   :     34000<br>



                </div>
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <td><a href="{{route('assets.index')}}"><button type="submit" class="btn btn-primary">
                                    {{ __('Assets') }}
                                </button></a>
                                </td>
                        <td><a href="{{route('location')}}"><button type="submit" class="btn btn-primary">
                                    {{ __('Location') }}
                                </button></a></td>
                        <td><a href="{{route('category')}}"><button type="submit" class="btn btn-primary">
                                    {{ __('Category') }}
                                </button></a></td>
                        <td><a href="{{route('vendor')}}"><button type="submit" class="btn btn-primary">
                                    {{ __('Vendor') }}
                                </button></a></td>
                        <td><a href="{{route('Depreciation')}}"><button type="submit" class="btn btn-primary">
                                    {{ __('Depreciation') }}
                                </button></a></td><td><a href="{{route('about')}}"><button type="submit" class="btn btn-primary">
                                    {{ __('Models') }}
                                </button></a></td><td><a href="{{route('about')}}"><button type="submit" class="btn btn-primary">
                                    {{ __('Services') }}
                                </button></a></td>

                </table>

            </div>
        </div>
    </div>
</div>
@endsection
