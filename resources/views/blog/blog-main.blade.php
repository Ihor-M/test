@extends('layout.main')

@section('content')

    <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-3 list-group">
                    @include('blog.side-menu')
                </div>
                <div class="col-sm-8 col-md-8 bg-success">
                    @foreach($posts as $post)
                        <a href="{{route('posts.show', ['posts'=>$post->id])}}"><h1 class="text-capitalize text-left">{!! $post->title !!}</h1></a>
                        <img class='img-responsive' src="{{ asset('/images/' . $post->getAttribute('image_path')) }}" alt="image">
                        <article class="text-left text-capitalize">{!! $post->messageBody !!}</article>
                        <h3 class="text-capitalize text-left">Author: {!! $post->author !!}</h3>
                        <p class="text-right"><i>Published at: {{ date('D m Y', strtotime($post->created_at)) }}</i></p>
                    @endforeach
                </div>
            </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 myfooter">
                {!! $posts !!}
            </div>
        </div>
    </div>

@endsection