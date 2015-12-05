<html>
<body>

<h1>Login Form</h1>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'Login_store', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('id', 'Login Id:') !!}
		{!! Form::text('id', null, array('required', 'class'=>'form-control',  'placeholder'=>'Your Login Id')) !!}
		<span class="fielderror">{{ $errors->first('email') }}</span>
	
</div><br>

<div class="form-group">
    {!! Form::label('password','Password:') !!}
		{!! Form::text('password', null, array('required', 'class'=>'form-control', 'placeholder'=>'Your password')) !!}
		<span class="fielderror" id="password_error">{{ $errors->first('password') }}</span>
	
</div><br>

<div class="form-group">
    {!! Form::submit('Login', array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</body>
</html>