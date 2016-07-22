@extends('layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                @foreach($titles as $title)
                    <div class="alert alert-info news-list-title">
                        <h3><a class="alert-link" href="{{route('posts.show', ['posts'=>$title->id])}}" class="my-buttons">{{ $title->title }}</a></h3>
                        <div class="news-list">
                            <img class='img-responsive' src="{{ asset('/images/' . $title->getAttribute('image_path')) }}" alt="image">
                            <article class="text-left text-capitalize">{!! $title->messageBody !!}</article>
                            <h3 class="text-capitalize text-left">Author: {!! $title->author !!}</h3>
                            <p class="text-right">Posted at: {!! $title->created_at !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 myfooter">
                {!! $titles !!}
            </div>
        </div>
    </div>

@endsection