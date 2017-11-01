<!DOCTYPE html>
<html>
<head>
	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel='stylesheet' href='/bootstrap-3.3.7-dist/css/bootstrap.min.css'> -->
<link rel='stylesheet' href='/colera-asset/bootstrap-3.3.7-dist/css/bootstrap.min.css'>

<title>Colera</title>


	

</head>
<body>

<?php

	$filename = "colera-asset";

	if(!file_exists($filename)){

		// install ColeraController
		copy("../resources/views/_colera/files/ColeraController.php", "'../../../app/Http/Controllers/ColeraController.php");

		/* 		create colera-asset (bootstrap e js)	 */
		mkdir("'../../../public/colera-asset/bootstrap-3.3.7-dist/css", 0777, true);
		mkdir("'../../../public/colera-asset/bootstrap-3.3.7-dist/fonts", 0777, true);
		mkdir("'../../../public/colera-asset/bootstrap-3.3.7-dist/js", 0777, true);
		mkdir("'../../../public/colera-asset/js", 0777, true);

		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/css/bootstrap.css", "colera-asset/bootstrap-3.3.7-dist/css/bootstrap.css");
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/css/bootstrap.css.map", "colera-asset/bootstrap-3.3.7-dist/css/bootstrap.css.map");
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/css/bootstrap.min.css", "colera-asset/bootstrap-3.3.7-dist/css/bootstrap.min.css");
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/css/bootstrap.min.css.map", "colera-asset/bootstrap-3.3.7-dist/css/bootstrap.min.css.map");

		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/css/bootstrap-theme.css", "colera-asset/bootstrap-3.3.7-dist/css/bootstrap-theme.css");
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/css/bootstrap-theme.css.map", "colera-asset/bootstrap-3.3.7-dist/css/bootstrap-theme.css.map");
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css", "colera-asset/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css");
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css.map", "colera-asset/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css.map");
		
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.eot", "colera-asset/bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.eot");
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.svg", "colera-asset/bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.svg");
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.ttf", "colera-asset/bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.ttf");
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.woff", "colera-asset/bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.woff");
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.woff2", "colera-asset/bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.woff2");
		
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/js/bootstrap.js", "colera-asset/bootstrap-3.3.7-dist/js/bootstrap.js");
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/js/bootstrap.min.js", "colera-asset/bootstrap-3.3.7-dist/js/bootstrap.min.js");
		copy("../resources/views/_colera/files/colera-asset/bootstrap-3.3.7-dist/js/npm.js", "colera-asset/bootstrap-3.3.7-dist/js/npm.js");
		
		copy("../resources/views/_colera/files/colera-asset/js/app.js", "colera-asset/js/app.js");
		copy("../resources/views/_colera/files/colera-asset/js/jquery-3.1.1.min.js", "colera-asset/js/jquery-3.1.1.min.js");
	}
?>

<section id="intro">
<div class="container">
	<div class="row">
		<div class="col-xs-12">

		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Colera</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      

		      <form class="navbar-form navbar-left">
		        
		      </form>

		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Fury</a></li>
		        <li><a href="#">Wrath</a></li>
		        <li><a href="#">Anger</a></li>
		        <li><a href="#">Hate</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Config<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>


		</div>
	</div>
</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
				  	<li><a href="#">Library</a></li>
				  	<li class="active">Data</li>
				</ol>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="panel panel-default">
				  <div class="panel-body">
			    	<div class="col-xs-8 col-xs-offset-2">
				    	<div class="col-xs-4">
				    		<br>
				    		<br>
				    		<label for="">Fury(CRUD)</label>
				    		<a href="" class="btn btn-default btn-block"data-toggle="modal" data-target="#myModalFuryInstall">Install</a>
				    		<br>
				    		<br>
				    		<label for="">Wrath(ACL)</label>
				    		<a href="" class="btn btn-default btn-block"data-toggle="modal" data-target="#myModalWrathInstall">Install</a>
				    		<br>
				    		<br>
				    		<label for="">Anger(Generator)</label>
				    		<a href="" class="btn btn-default btn-block"data-toggle="modal" data-target="#myModalAngerInstall">Install</a>
				    		<br>
				    		<br>
				    		<label for="">Hate(HTML)</label>
				    		<a href="" class="btn btn-default btn-block"data-toggle="modal" data-target="#myModalHateInstall">Install</a>
				    		<br>
				    		<br>
				    		<br>
				    	</div>
				    	<div class="col-xs-3">
				    		<br>
				    		<br>
				    		<label for="">&nbsp</label>
				    		<a href="" class="btn btn-default btn-block">Config</a>
				    		<br>
				    		<br>
				    		<label for="">&nbsp</label>
				    		<a href="" class="btn btn-default btn-block">Config</a>
				    		<br>
				    		<br>
				    		<label for="">&nbsp</label>
				    		<a href="" class="btn btn-default btn-block">Config</a>
				    		<br>
				    		<br>
				    		<label for="">&nbsp</label>
				    		<a href="" class="btn btn-default btn-block">Config</a>
				    		<br>
				    		<br>
				    		<br>
				    	</div>

				    	<div class="col-xs-2">
				    		<br>
				    		<br>
				    		<label for="">&nbsp</label>
				    		<a href="" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModalFury">Info</a>
				    		<br>
				    		<br>
				    		<label for="">&nbsp</label>
				    		<a href="" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModalWrath">Info</a>
				    		<br>
				    		<br>
				    		<label for="">&nbsp</label>
				    		<a href="" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModalAnger">Info</a>
				    		<br>
				    		<br>
				    		<label for="">&nbsp</label>
				    		<a href="" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModalHate">Info</a>
				    		<br>
				    		<br>
				    		<br>
				    	</div>

				    	<div class="col-xs-3">
				    		<br>
				    		<br>
				    		<label for="">&nbsp</label>
				    		<?php echo file_exists("'../../../resources/views/_fury")?  "<a href='/fury' class='btn btn-default btn-block'>Access</a>": "<a href='' class='btn btn-default btn-block' data-toggle='modal' data-target='#myModalWrath' disabled>Not installed</a>";?>
				    		<br>
				    		<br>
				    		<label for="">&nbsp</label>
				    		<?php echo file_exists("'../../../resources/views/_wrath")?  "<a href='/wrath' class='btn btn-default btn-block'>Access</a>": "<a href='' class='btn btn-default btn-block' disabled>Not installed</a>";?>
				    		<!-- <a href="" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModalWrath"></a> -->
				    		<br>
				    		<br>
				    		<label for="">&nbsp</label>
				    		<?php echo file_exists("'../../../resources/views/_anger")?  "<a href='' class='btn btn-default btn-block'>Access</a>": "<a href='' class='btn btn-default btn-block' disabled>Not installed</a>";?>
				    		<br>
				    		<br>
				    		<label for="">&nbsp</label>
				    		<?php echo file_exists("'../../../resources/views/_hate")?  "<a href='' class='btn btn-default btn-block'>Access</a>": "<a href='' class='btn btn-default btn-block' disabled>Not installed</a>";?>
				    		<br>
				    		<br>
				    		<br>
				    	</div>

			    	</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- Modal Fury -->
<div class="modal fade" id="myModalFury" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Fury info
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Fury -->

<!-- Modal Wrath -->
<div class="modal fade" id="myModalWrath" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Wrath info
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Wrath -->

<!-- Modal Anger -->
<div class="modal fade" id="myModalAnger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Anger info	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Anger Wrath -->


<!-- Modal Hate -->
<div class="modal fade" id="myModalHate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Hate info
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Hate Wrath -->

<!-- ---------------------- install modal  ---------------------- -->


<!-- Modal Fury -->
<div class="modal fade" id="myModalFuryInstall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" style="font-size:12px">
		<b>Files created</b><br>

		"resources/views/_fury" <br>
		<br>
      	<b>Routes</b>(copy)<br>
        // -----------------------------------------------fury-----------------------------------------------//<br>
        Route::get('/fury', function () {<br>
            return view('_colera.fury.index');<br>
        });<br>
        Route::get('/fury/migration', ['uses' => 'FuryController@migration', 'as' => 'fury.migration']);<br>
        Route::get('/fury/generate/{id}', ['uses' => 'FuryController@generate', 'as' => 'fury.generate']);<br>
        Route::post('/fury/create', ['uses' => 'FuryController@create', 'as' => 'fury.create']);<br>
        // -----------------------------------------------//fury---------------------------------------------//

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="{{route('fury-install')}}" type="button" class="btn btn-primary">Install</a>
        <a href="{{route('fury-uninstall')}}" type="button" class="btn btn-primary">Uninstall</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal Fury -->

<!-- Modal Wrath -->
<div class="modal fade" id="myModalWrathInstall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" style="font-size:12px">
		<b>Files created</b><br>

		"resources/views/_wrath" <br>
		<br>
      	<b>Routes</b>(copy)<br>
        // -----------------------------------------------wrath-----------------------------------------------//<br>
Route::get('/wrath', function () { return view('_wrath.index'); }); <br>
Route::get('acl/', ['uses' => 'WrathController@dashboard', 'as' => 'acl']);<br>
Route::get('/acl/user/{id}', ['uses' => 'WrathController@user', 'as' => 'acl.user']);<br>
Route::post('/acl/user-role-attach/', ['uses' => 'WrathController@userRoleAttach', 'as' => 'acl.user-role-attach']);<br>
Route::post('/acl/user-role-dettach/', ['uses' => 'WrathController@userRoleDettach', 'as' => 'acl.user-role-dettach']);<br>

Route::post('/acl/role-permission-attach/', ['uses' => 'WrathController@rolePermissionAttach', 'as' => 'acl.role-permission-attach']);<br>
Route::post('/acl/role-permission-dettach/', ['uses' => 'WrathController@rolePermissionDettach', 'as' => 'acl.role-permission-dettach']);<br>

Route::get('/acl/role/{id}', ['uses' => 'WrathController@role', 'as' => 'acl.role']);<br>
Route::post('/acl/role-role-attach/', ['uses' => 'WrathController@rolePermissionAttach', 'as' => 'acl.role-role-attach']);<br>
Route::post('/acl/role-role-dettach/', ['uses' => 'WrathController@rolePermissionDettach', 'as' => 'acl.role-role-dettach']);<br>
        // -----------------------------------------------//wrath---------------------------------------------//

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="{{route('wrath-install')}}" type="button" class="btn btn-primary">Install</a>
        <a href="{{route('wrath-uninstall')}}" type="button" class="btn btn-primary">Uninstall</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal Wrath -->

<!-- Modal Anger -->
<div class="modal fade" id="myModalAngerInstall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Anger Modal Install
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Install</button>
      </div>
    </div>
  </div>
</div>
<!-- Anger Wrath -->


<!-- Modal Hate -->
<div class="modal fade" id="myModalHateInstall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Hate Modal Install
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Install</button>
      </div>
    </div>
  </div>
</div>
<!-- Hate Wrath -->






<script src="colera-asset/js/jquery-3.1.1.min.js"></script>
<script src="colera-asset/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function(){
		//alert($("#fodaci").text());
	});
	//alert('asdf');

</script>
</body>
</html>
