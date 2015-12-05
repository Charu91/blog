@extends("layouts.master")

@section('content')
 
 <form method='get' action='create'>
<input type=button onClick="parent.location='create'" value='Create new Blog'>
</form> 
    @foreach($posts as $post)
        <h3>{{ $post->title }}</h3>
		<p>{{ $post->text }}</p>
    @endforeach


@stop