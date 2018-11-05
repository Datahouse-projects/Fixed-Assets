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
                            <td>Assets Name</td>
                            <td>Assets Cost</td>
                            <td>Salvage value</td>
                            <td>Depreciable cost</td>
                            <td>Expected life</td>
                            <td>Depreciation Ratio</td>
                            <td>Depreciation Per Year</td>
                        </tr>







                        @foreach($assets as $assets)


                            <?php
                              $stau=$assets->type;
                              $year=$assets->cost- $assets->old;
                              $yea=$year/$assets->expected;
                              $ratio=2;
                              if($stau == "Buildings")
                                  {
                                      $ratio=0.2;
                                  }
                            if($stau == "Plant and Machinery")
                            {
                                $ratio=0.2;
                            }
                            if($stau == "Funiture and Fittings")
                            {
                                $ratio=0.125;
                            }
                            if($stau == "Intangible")
                            {
                                $ratio=0.01;
                            }

                            if($stau == "Heavy Machine")
                            {
                                $ratio=0.25;
                            }

                            if($stau == "Computer and Data Eduipments")
                            {
                                $ratio=0.01;
                            }
                            if($stau == "Building and permanent")
                            {
                                $ratio=0.05;
                            }





                            ?>




                            <tr>
                                <td> {{ $assets->name}}</td>
                                <td> {{ $assets->cost}}</td>
                                <td> {{  $assets->old}}</td>
                                <td> {{ $assets->cost- $assets->old}}</td>
                                <td> {{ $assets->expected }}</td>
                                <td> {{ $ratio }}</td>
                                <td>{{ $yea}}  </td>






                            </tr>

                        @endforeach


                    </table>
                </div>
            </div>
        </div>


@endsection



