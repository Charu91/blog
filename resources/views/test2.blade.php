<!-- 
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5 Test2</div>
            </div>
        </div>
    </body>
</html>
-->
<!---<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
  <!-- sidebar nav 
    <nav id="sidebar-nav">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="#">Fly to the Moon</a></li>
            <li><a href="#">Dig to China</a></li>
            <li><a href="#">Swim Across the Sea</a></li>
        </ul>
    </nav>

 <div class="container">
            <div class="content">
                <div class="title">Test2 Laravel</div>
            </div>
        </div>

</body>
</html>

-->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
			
			@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
        </div>
    </body>
</html>

