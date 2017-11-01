<html>
<head>
	<meta charset="UTF-8">
	<title>Fury</title>



	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/colera-asset/bootstrap-3.3.7-dist/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="/colera-asset/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

	

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Laravel Wrath <small>fear it...</small></h1>
				<br>


			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-xs-5">
				<h3>1-Requirements <small>(dont worry)</small></h3>

				<?php
				include('../resources/views/_wrath/core/index-php.php');
				echo Index::checkFiles();
					//echo getcwd();
				?>
			</div>


			<div class="col-xs-7" style="font-size: 10">
							<h3>2-Routes <small>(copy)</small></h3>

Route::get('/wrath', function () { return view('_wrath.index'); }); <br>
Route::get('acl/dashboard/', ['uses' => 'WrathController@dashboard', 'as' => 'acl']);<br>
Route::get('/acl/user/{id}', ['uses' => 'WrathController@user', 'as' => 'acl.user']);<br>
Route::post('/acl/user-role-attach/', ['uses' => 'WrathController@userRoleAttach', 'as' => 'acl.user-role-attach']);<br>
Route::post('/acl/user-role-dettach/', ['uses' => 'WrathController@userRoleDettach', 'as' => 'acl.user-role-dettach']);<br>

Route::post('/acl/role-permission-attach/', ['uses' => 'WrathController@rolePermissionAttach', 'as' => 'acl.role-permission-attach']);<br>
Route::post('/acl/role-permission-dettach/', ['uses' => 'WrathController@rolePermissionDettach', 'as' => 'acl.role-permission-dettach']);<br>

Route::get('/acl/role/{id}', ['uses' => 'WrathController@role', 'as' => 'acl.role']);<br>
Route::post('/acl/role-role-attach/', ['uses' => 'WrathController@rolePermissionAttach', 'as' => 'acl.role-role-attach']);<br>
Route::post('/acl/role-role-dettach/', ['uses' => 'WrathController@rolePermissionDettach', 'as' => 'acl.role-role-dettach']);<br>


			</div>

		</div>
		













		<div class="row">
			<a href="{{route('acl')}}" class="btn btn-default">Wrath it...</a>
		</div>
		<hr>
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
