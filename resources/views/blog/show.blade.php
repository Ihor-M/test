@extends('layout.main')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 bg-warning">
                    <h2 class="text-left">{{$posts->category}}</h2>
                    <h1 class="text-capitalize text-left">{{ $posts->title }}</h1>
                    <article class="text-left text-capitalize">{{ $posts->messageBody }}</article>
                    <h3 class="text-capitalize text-left">Author: {{ $posts->author }}</h3>
                    <p class="text-right">Posted at: {{ $posts->created_at }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection