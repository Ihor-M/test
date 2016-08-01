@extends('layout.main')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create new article</h1>
                <hr>
                <form action="{{ route('posts.update', [$post->id]) }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    {!! method_field('put') !!}

                    <div class="form-group">
                        {{ Form::label('category', 'Choose article category', ['class' => 'control-label']) }}
                        {{ Form::select('category', [
                            'Cars & Vehicles'   => 'Cars & Vehicles',
                            'Technology'        => 'Technology',
                            'Sport'             => 'Sport'], [
                            'class'             => 'form-control']) }}<br>
                    </div>
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <div class="form-group">
                        {{ Form::label('author', 'Author:', ['class' => 'control-label']) }}<br>
                        {{ Form::text('author', old('author', $post->author), ['required', 'class' => 'form-control text-capitalize']) }}<br>
                        {{ Form::label('articleName', 'Article name:', ['class' => 'control-label']) }}<br>
                        {{ Form::text('articleName', old('articleName', $post->title), ['required', 'class' => 'form-control']) }}<br>
                        {{ Form::label('articleBody', 'Article body:', ['class' => 'control-label']) }}<br>
                        {{ Form::textarea('articleBody', old('articleBody', $post->messageBody), ['required', 'class' => 'form-control']) }}<br>
                        <div class="row">
                            <div class="col-md-5">
                                {{ Form::label('image', 'Select your image', ['class' => 'control-label']) }}
                                {{ Form::file('image', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-7">
                                {{ Form::submit('Post the article', ['class' => 'btn btn-success btn-lg btn-block']) }}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <hr>
        </div>
    </div>
    </div>

@endsection