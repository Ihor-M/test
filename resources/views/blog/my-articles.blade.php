@extends('layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                @foreach($titles as $title)
                    <div class="alert alert-info">
                        <a class="alert-link" href="#">{{ $title->title }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection