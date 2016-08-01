@extends('layout.main')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2 list-group-item news-list-title">
                <h2>Cars & Vehicles</h2>
                <ul class="list-group">
                    @foreach($carsAndVehicles as $carAndVehicle)
                        <li class="list-group-item">
                            <h4><b>{{ $carAndVehicle->title }}</b></h4>
                            <img class='img-responsive' src="{{ asset('/images/' . $carAndVehicle->getAttribute('image_path')) }}" alt="image">
                            <article>{{ $carAndVehicle->messageBody }}</article>
                            <h5><b>{{ $carAndVehicle->author }}</b></h5>
                            <span><i>Published at: {{ date('D m Y', strtotime($carAndVehicle->created_at)) }}</i></span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 myfooter">
                {{ $carsAndVehicles }}
            </div>
        </div>
    </div>

@stop