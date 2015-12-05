

<html>
<body>
<h1>Contact Valid Form</h1>
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
		{!! Form::text('name', null, array('required', 'class'=>'form-control',  'placeholder'=>'Your name')) !!}
</div><br>

<div class="form-group">
    {!! Form::label('email','E-mail Address:') !!}
		{!! Form::text('email', null, array('required', 'class'=>'form-control', 'placeholder'=>'Your e-mail address')) !!}
</div><br>

<div class="form-group">
    {!! Form::label('message','Message:') !!}
		{!! Form::textarea('message', null,array('required', 'class'=>'form-control',  'placeholder'=>'Your message')) !!}
</div><br>

<div class="form-group">
    {!! Form::submit('Contact Us!', array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</body>
</html>

<?php 
foreach($data as $d){
	echo "<pre>";
	print_r($d);
	echo "--"; }
?>