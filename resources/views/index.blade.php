@extends("layouts.master")

@section('content')

    @foreach($posts as $post)
        <h3>{{ $post->title }}</h3>
		<p>{{ $post->text }}</p>
    @endforeach


@stop