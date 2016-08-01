@extends('layout.main')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <ul class="list-group">
                        @foreach($searchedAuthors as $searchedAuthor)
                            <li class="list-group-item">
                                <h4><b>{{ $searchedAuthor->title }}</b></h4>
                                <h5><b>{{ $searchedAuthor->author }}</b></h5>
                                <span><i>Published at: {{ date('D m Y', strtotime($searchedAuthor->created_at)) }}</i></span>
                                <img class='img-responsive' src="{{ asset('/images/' . $searchedAuthor->getAttribute('image_path')) }}" alt="image">
                                <article class="text-left text-capitalize">{!! $searchedAuthor->messageBody !!}</article>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection