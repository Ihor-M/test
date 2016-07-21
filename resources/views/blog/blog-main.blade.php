@extends('layout.main')

@section('content')

    <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 list-group">
                    @include('blog.side-menu')
                </div>
                <div class="col-md-8 bg-success">
                    @foreach($posts as $post)
                        <h1 class="text-capitalize text-left">{!! $post->title !!}</h1>
                        <article class="text-left text-capitalize">{!! $post->messageBody !!}</article>
                        <h3 class="text-capitalize text-left">Author: {!! $post->author !!}</h3>
                        <p class="text-right">Posted at: {!! $post->created_at !!}</p>
                    @endforeach
                </div>
            </div>
    </div>

@endsection