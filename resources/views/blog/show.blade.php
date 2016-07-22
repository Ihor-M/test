@extends('layout.main')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 bg-warning">
                    <h2 class="text-left">{{$posts->category}}</h2>
                    <h1 class="text-capitalize text-left">{{ $posts->title }}</h1>
                    <img class='img-responsive' src="{{ asset('/images/' . $posts->getAttribute('image_path')) }}" alt="image">
                    <article class="text-left text-capitalize">{{ $posts->messageBody }}</article>
                    <h3 class="text-capitalize text-left">Author: {{ $posts->author }}</h3>
                    <span class="text-right"><i>Published at: {{ date('D m Y', strtotime($posts->created_at)) }}</i></span>
                    <a href="{{route('posts.delete', ['posts'=>$posts->id])}}" class="my-buttons"><span class="glyphicon glyphicon-trash"></span></a>
                    <a href="{{route('blog.edit', ['posts'=>$posts->id])}}" class="my-buttons"><span class="glyphicon glyphicon-pencil"></span></a>
                </div>
            </div>
        </div>
    </div>

@endsection