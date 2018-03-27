<html>
<head>
	<meta charset="UTF-8">
	<title>Fury</title>



	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/colera-asset/bootstrap-3.3.7-dist/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="/colera-asset/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

	

</head>
<body>teset
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Laravel Fury <small>just fury it</small></h1>
				<br>


			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h3>1-Requirements <small>(dont worry)</small></h3>

				<?php
				include('../resources/views/_colera/fury/core/index-php.php');
				echo Index::checkFiles();
					//echo getcwd();
				?>
			</div>
			<div class="col-xs-6">
				<h3>2-Migrate</h3>
				<p>Now you need to execute a migrate for Laravel Fury could find the migrations</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-xs-6">
				<h3>3-Routes <small>(copy it)</small></h3>
				<h6>// -----------------------------------------------fury-----------------------------------------------//</h6>
				<h6>Route::get('/fury/migration', ['uses' => 'FuryController@migration', 'as' => 'fury.migration']);</h6>
				<h6>Route::get('/fury/generate/{id}', ['uses' => 'FuryController@generate', 'as' => 'fury.generate']);</h6>
				<h6>Route::post('/fury/create', ['uses' => 'FuryController@create', 'as' => 'fury.create']);</h6>
				<h6>// -----------------------------------------------//fury---------------------------------------------//</h6>
			</div>
			
			<div class="col-xs-6">
				<h3>4-Message box <small>(views/layouts.app (on line above <span id="mySpan"></span> ))</small></h3>

				<textarea name="" id="message_box" rows="13" class="form-control">

				</textarea>
				

			
			</div>

			
		</div>
		<hr>
		<div class="row">
			<div class="col-xs-6">
				<h3>5-Laravel auth <small>(creating the auth default)</small></h3>
				<p>In your terminal: php artisan make:auth</p>
				<h3>6-Bootstrap</h3>
				<label id="bootstrap_link"><link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css"></label>

			</div>

			<div class="col-xs-6 text-center">
				<h3>Migrations <small>since you followed the instructions you can go to migrations</small></h3>
				<p><a href="{{route('fury.migration')}}" class="btn btn-default">Migrations</a></p>
			</div>
		</div>
	</div>
</div>



<script src="/colera-asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="/colera-asset/bootstrap-3.3.7-dist/js/bootstrap.min.js" ></script>

<script>

	$(document).ready(function(){
		var message = 	"<!-- crud message -->"+
		"\n\t@"+"if(Session::has('flash_message'))"+
		"\n\t\t<div class='container'>"+
		"\n\t\t\t<div class='row'>"+
		"\n\t\t\t\t<div class='col-md-12'>"+
		"\n\t\t\t\t<div align='center' class='alert {\{Session::get(\"flash_message\")[\"class\"]}}'>"+
		"\n\t\t\t\t\t{\{Session::get('flash_message')['msg']}}"+
		"\n\t\t\t\t</div>"+
		"\n\t\t\t</div>"+
		"\n\t\t</div>"+
		"\n\t</div>"+
		"\n\t@"+"endif"+
		"\n<!-- crud message -->"+
		"";
		$("#message_box").val(message);
		
		$("#message_box").css("font-size","10");

		$("#mySpan").html("\"@"+"yield('content')\"");
		var bootstrap_link = "\< link rel='stylesheet' href='/bootstrap-3.3.7-dist/css/bootstrap.min.css'>";
		$("#bootstrap_link").html(bootstrap_link);
		//$("#bootstrap_link").html("asdf");
	});
</script>
</body>
</html>
