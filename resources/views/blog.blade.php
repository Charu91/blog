@extends("layouts.master")

@section('content')
<h4> BLOGS</h4>
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
{!! Form::open(array('route' => 'save', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Title') !!}
		{!! Form::text('title', null, array('required', 'class'=>'form-control', )) !!}
</div><br>

<div class="form-group">
    {!! Form::label('Text') !!}
		{!! Form::textarea('text', null,array('required', 'class'=>'form-control',  'placeholder'=>'Your text')) !!}
</div><br>

<div class="form-group">
    {!! Form::submit('Publish', array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
@stop