@extends('layout.main')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create new article</h1>
                <hr>
                {{ Form::open([
                    'route' => 'posts.store',
                    'novalidate' => 'novalidate',
                    'files' => true,
                ]) }}
                <div class="form-group">
                    {{ Form::label('category', 'Choose article category', ['class' => 'control-label']) }}
                    {{ Form::select('category', [
                        'Cars & Vehicles'   => 'Cars & Vehicles',
                        'Technology'        => 'Technology',
                        'Sport'             => 'Sport'], [
                        'class'             => 'form-control']) }}<br>
                </div>
                <div class="form-group">
                    {{ Form::label('author', 'Author:', ['class' => 'control-label']) }}<br>
                    {{ Form::text('author', null, ['required', 'class' => 'form-control text-capitalize']) }}<br>
                    {{ Form::label('articleName', 'Article name:', ['class' => 'control-label']) }}<br>
                    {{ Form::text('articleName', null, ['required', 'class' => 'form-control']) }}<br>
                    {{ Form::label('articleBody', 'Article body:', ['class' => 'control-label']) }}<br>
                    {{ Form::textarea('articleBody', null, ['required', 'class' => 'form-control']) }}<br>
                    <div class="row">
                        <div class="col-md-5">
                            {{ Form::label('image', 'Select your image', ['class' => 'control-label']) }}
                            {{ Form::file('image', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="col-md-7">
                            {{ Form::submit('Post the article', ['class' => 'btn btn-success btn-lg btn-block']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
                <hr>
            </div>
        </div>
    </div>

@endsection