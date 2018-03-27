<html>
<head>
	<meta charset="UTF-8">
	<title>Generate</title>



	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/colera-asset/bootstrap-3.3.7-dist/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="/colera-asset/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

	

</head>
<body>teset
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1><a href="/fury" style="color:#333">Laravel Fury</a> <small>just fury it</small></h1><br>
			</div>
		</div>
	</div>

	<section id="edit_section">

		<div class="container" style="font-size: 12;display: none ">
			<div class="row">
				<div class="col-xs-12" >
					<?php
					$mypath = "../database/migrations/".$migration->migration.".php";
					$myfile = fopen($mypath, "r") or die("Unable to open file!");
					echo "<div id='my_migration' class='my_migrations' style='display:'>";
					echo fread($myfile,filesize($mypath));
					echo "</div>";
					echo "<br>";
					echo "<br>";
					fclose($myfile);
					?>
				</div>
				<div class="col-xs-12" id="cleaned">

				</div>

			</div>
			<br><br> <br> <br>
		</div>



		<div class="container">
			<div class="row">


				<div class="col-xs-3" style="font-size: 12" id="migration_name">
					{{$migration->migration}}
				</div>

				<div class="col-xs-3" style="font-size: 12" >
					<b>Crud name: </b> <input type="text" id="crud_name" />

				</div>
				<div class="col-xs-3" style="font-size: 12">
					<b>Singular: </b> <input type="text" id="singular" />
				</div>
				<div class="col-xs-3" style="font-size: 12" >
					<b>Plural: </b> <input type="text" id="plural" />
				</div>

				

				




			</div>
			<br>
			<!-- badges \/ -->
<!-- 			<div class="row">
				<div class="col-xs-12 text-center" id="columns">

				</div>
			</div>


 -->
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center" id="columnsEdit">

				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-12">
				<br>
				
				
				</div>
			</div>
		</div>

	</section>
<br>
	<section id="generate_section">
	
	<div class="container">
		<div class="row">
			<div class="col-xs-10">
			

				<div>

				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#routes" aria-controls="routes" role="tab" data-toggle="tab">Routes</a></li>
				    <li role="presentation"><a href="#controller" aria-controls="controller" role="tab" data-toggle="tab">Controller</a></li>
				    <li role="presentation"><a href="#model" aria-controls="model" role="tab" data-toggle="tab">Model</a></li>
				    <li role="presentation"><a href="#request" aria-controls="request" role="tab" data-toggle="tab">Request</a></li>
				    <li role="presentation"><a href="#create_view" aria-controls="create_view" role="tab" data-toggle="tab">Create view</a></li>
				    <li role="presentation"><a href="#edit_view" aria-controls="edit_view" role="tab" data-toggle="tab">Edit view</a></li>
				    <li role="presentation"><a href="#index_view" aria-controls="index_view" role="tab" data-toggle="tab">Index view</a></li>
				    <li role="presentation"><a href="#show_view" aria-controls="show_view" role="tab" data-toggle="tab">Show view</a></li>
				    <li role="presentation"><a href="#files_created" aria-controls="files_created" role="tab" data-toggle="tab">Files created</a></li>
				    
				    
				  </ul>
				  

				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active" id="routes">
				    	<textarea name="routes_out" id="routes_out" cols="" rows="17" class="form-control"></textarea><br>
				    </div>

				    <div role="tabpanel" class="tab-pane fade" id="controller">
				    	<textarea name="controller_out" id="controller_out" cols="" rows="17" class="form-control"></textarea><br>
				    </div>

		            <div role="tabpanel" class="tab-pane fade" id="model">
		    			<textarea name="model_out" id="model_out" cols="" rows="17" class="form-control"></textarea><br>
		            </div>

		            <div role="tabpanel" class="tab-pane fade" id="request">
	        			<textarea name="request_out" id="request_out" cols="" rows="17" class="form-control"></textarea><br>
	                </div>


				    <div role="tabpanel" class="tab-pane fade" id="create_view">
				    	<textarea name="views_create_out" id="views_create_out" cols="" rows="17" class="form-control"></textarea><br>
				    </div>

				    <div role="tabpanel" class="tab-pane fade" id="edit_view">
				    	<textarea name="views_edit_out" id="views_edit_out" cols="" rows="17" class="form-control"></textarea><br>
				    </div>

				    <div role="tabpanel" class="tab-pane fade" id="index_view">
						<textarea name="views_index_out" id="views_index_out" cols="" rows="17" class="form-control"></textarea><br>
				    </div>

			        <div role="tabpanel" class="tab-pane fade" id="show_view">
						<textarea name="views_show_out" id="views_show_out" cols="" rows="17" class="form-control"></textarea><br>
			        </div>

	                <div role="tabpanel" class="tab-pane fade" id="files_created">
	        			<textarea name="files_created_out" id="files_created_out" cols="" rows="17" class="form-control"></textarea><br>
	                </div>



	                







				  </div>

				</div>

				


		</div>
		<div class="col-xs-2">
		<br>
		<br>
		<br>
		<a href="#" class="btn btn-default btn-block" id="generate_btn">Generate</a>
		<br>
		<br>
		<br>
		<a id="updateCode" href="#" class="btn btn-default btn-block">Update code</a>
		<br>
		<br>
		<br>

		<!-- form -->
		<form id="saveForm" class="form-horizontal" role="form" method="POST" action="{{route('fury.create')}}" enctype="multipart/form-data">
		        {{ csrf_field() }}

		        <div class="form-group{{ $errors->has('migration_id') ? ' has-error' : '' }}" style="display: none">
		            <label for="migration_id" class="col-md-4 control-label">Id</label>

		            <div class="col-md-6">
		                <input id="migration_id" type="text" class="form-control" name="migration_id" value="{{$migration->id}}">
		                @if ($errors->has('migration_id'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('migration_id') }}</strong>
		                    </span>
		                @endif
		            </div>
		        </div>

		        <div class="form-group{{ $errors->has('crud_name_out') ? ' has-error' : '' }}" style="display: none">
		            <label for="crud_name_out" class="col-md-4 control-label">Crud name</label>

		            <div class="col-md-6">
		                <input id="crud_name_out" type="text" class="form-control" name="crud_name_out" value="">
		                @if ($errors->has('crud_name_out'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('crud_name_out') }}</strong>
		                    </span>
		                @endif
		            </div>
		        </div>


		        <div class="form-group{{ $errors->has('controller_out_post') ? ' has-error' : '' }}" style="display: none">
		            <label for="controller_out_post" class="col-md-4 control-label">Controller</label>

		            <div class="col-md-6">
		                <input id="controller_out_post" type="text" class="form-control" name="controller_out_post" placeholder="Controller">
		                @if ($errors->has('controller_out_post'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('controller_out_post') }}</strong>
		                    </span>
		                @endif
		            </div>
		        </div>


		        <div class="form-group{{ $errors->has('model_out_post') ? ' has-error' : '' }}" style="display: none">
		            <label for="model_out_post" class="col-md-4 control-label">Model</label>

		            <div class="col-md-6">
		                <input id="model_out_post" type="text" class="form-control" name="model_out_post" placeholder="Model">
		                @if ($errors->has('model_out_post'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('model_out_post') }}</strong>
		                    </span>
		                @endif
		            </div>
		        </div>

		        <div class="form-group{{ $errors->has('request_out_post') ? ' has-error' : '' }}" style="display: none">
		            <label for="request_out_post" class="col-md-4 control-label">Request</label>

		            <div class="col-md-6">
		                <input id="request_out_post" type="text" class="form-control" name="request_out_post" placeholder="Request">
		                @if ($errors->has('request_out_post'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('request_out_post') }}</strong>
		                    </span>
		                @endif
		            </div>
		        </div>



		        <div class="form-group{{ $errors->has('views_create_out_post') ? ' has-error' : '' }}" style="display: none">
		            <label for="views_create_out_post" class="col-md-4 control-label">Create</label>

		            <div class="col-md-6">
		                <input id="views_create_out_post" type="text" class="form-control" name="views_create_out_post" placeholder="Create">
		                @if ($errors->has('views_create_out_post'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('views_create_out_post') }}</strong>
		                    </span>
		                @endif
		            </div>
		        </div>

		        <div class="form-group{{ $errors->has('views_edit_out_post') ? ' has-error' : '' }}" style="display: none">
		            <label for="views_edit_out_post" class="col-md-4 control-label">Edit</label>

		            <div class="col-md-6">
		                <input id="views_edit_out_post" type="text" class="form-control" name="views_edit_out_post" placeholder="Edit">
		                @if ($errors->has('views_edit_out_post'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('views_edit_out_post') }}</strong>
		                    </span>
		                @endif
		            </div>
		        </div>

		        <div class="form-group{{ $errors->has('views_index_out_post') ? ' has-error' : '' }}" style="display: none">
		            <label for="views_index_out_post" class="col-md-4 control-label">Index</label>

		            <div class="col-md-6">
		                <input id="views_index_out_post" type="text" class="form-control" name="views_index_out_post" placeholder="Index">
		                @if ($errors->has('views_index_out_post'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('views_index_out_post') }}</strong>
		                    </span>
		                @endif
		            </div>
		        </div>

		        <div class="form-group{{ $errors->has('views_show_out_post') ? ' has-error' : '' }}" style="display: none">
		            <label for="views_show_out_post" class="col-md-4 control-label">Show</label>

		            <div class="col-md-6">
		                <input id="views_show_out_post" type="text" class="form-control" name="views_show_out_post" placeholder="Show">
		                @if ($errors->has('views_show_out_post'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('views_show_out_post') }}</strong>
		                    </span>
		                @endif
		            </div>
		        </div>



		        
		        
		        <!-- <div class="form-group">
		            <label for="" class="col-md-4 control-label"></label>
		            <div class="col-md-6"> -->
		                <button id="createFilesBtn" class="btn btn-default btn-block">Create files</button>
		            <!-- </div>
		        </div> -->
		</form>

		<!-- form -->

			
		</div>
	</div>
		
	</section>
	

	<script src="/colera-asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="/colera-asset/bootstrap-3.3.7-dist/js/bootstrap.min.js" ></script>

	<script>
		$(document).ready(function(){

			createCleanedBlock();
			findColumns();

			obj = getAll();
			names = getNames();


			function getAll(){


				var obj = {};
				var outter = "";

				function MyObject(_id, _name, _type, _alias, _rt){
					this.Id = _id;
					this.Name = _name;
					this.Type = _type;
					this.Alias = _alias;
					this.RT = _rt;
				}

				var rowCount = $(".cols").length;
			//alert(rowCount);

			for (var i = 0; i < rowCount; i++) {
				FinalColName = $("#col_name"+i+"").text();
				FinalColType = $("#col_type"+i+"").text();
				FinalColAlias = $("#col_alias"+i+"").text();
				FinalColRT = $("#col_real_type"+i+"").text();
				//alert(FinalColName);

				obj[i] = new MyObject(i,FinalColName, FinalColType,FinalColAlias,FinalColRT);
				//outter += "Name: "+ obj[i].Name +". Type: "+obj[i].Type +". Alias: "+obj[i].Alias +" RealType: "+obj[i].RT +"\n"; // populating!!!
			}
			return obj;
		}

		function getNames(){
		    //var rowCount = $('.migration_rows').length;

		    var textBlock = $("#migration_name").text();
		    var test_str = textBlock;
		    var start_pos = test_str.indexOf('_create_') + 8;
		    var end_pos = test_str.indexOf('_table',start_pos);
		    var text_to_get = test_str.substring(start_pos,end_pos)
				//alert(text_to_get);
				text_to_get = toPascalCase(text_to_get);
				//alert(text_to_get);
				text_to_get = text_to_get.slice(0,-1)
				 //alert(text_to_get);

				 singular = text_to_get.toLowerCase();
				 plural = singular+"s";
				 $("#crud_name").val(text_to_get);
				 $("#singular").val(singular);
				 $("#plural").val(plural);

				 var names = {CrudName:text_to_get, Singular:singular, Plural:plural};
				 return names;
				}

		function toPascalCase(str) { //first letter capitalize and after underline Too
			var arr = str.split(/\s|_/);
			for(var i=0,l=arr.length; i<l; i++) {
				arr[i] = arr[i].substr(0,1).toUpperCase() + 
				(arr[i].length > 1 ? arr[i].substr(1).toLowerCase() : "");
			}
			return arr.join("");
		}

		

		function findColumns(){
			count = countingColumns();
				//alert(count);
				var outter = "";
				outterEditColumns = "<div class='row'>"
				+"<div class='col-xs-1'>Name</div>"
				+"<div class='col-xs-1'>Alias</div>"
				+"<div class='col-xs-1'>Type</div>"
				+"<div class='col-xs-1'>text</div>"
				+"<div class='col-xs-1'>email</div>"
				+"<div class='col-xs-1'>password</div>"
				+"<div class='col-xs-1'>number</div>"
				+"<div class='col-xs-1'>date</div>"
				+"<div class='col-xs-1'>check</div>"
				+"<div class='col-xs-1'>radio</div>"
				+"<div class='col-xs-1 text-danger'>Delete</div>"
				+"</div> "

				var textBlock = $("#cleaned").text();

				for (var i = 0; i < count; i++) {
					
					//textBlock =  "$table->" + textBlock;

					//alert(textBlock);
					var start_pos = textBlock.indexOf('$table->') + 8;
					var end_pos = textBlock.indexOf('(',start_pos);
					var columnType = textBlock.substring(start_pos,end_pos)
					
					var start_pos = textBlock.indexOf('\'') + 1;
					var end_pos = textBlock.indexOf('\'',start_pos);
					var columnName = textBlock.substring(start_pos,end_pos)


					var columnAlias = columnName.toLowerCase().replace(/\b[a-z]/g, function(letter) {
						return letter.toUpperCase();
					});




					//obj[i] = new MyObject(i,columnName, columnType,columnAlias);
					
					//badges \/
					//outter += "<span class='cols'><span class='badge'><span id='col_name"+i+"'>"+columnName+"</span><span id='col_type"+i+"'> ("+columnType+") </span> - <span id='col_alias"+i+"'>"+columnAlias+"</span></span></span> ";
					
					outterEditColumns += "<div class='row cols'>"
					+"<div class='col-xs-1'> <input class='form-control' type='text' id='col_name_edit"+i+"' value='"+columnName+"'/> </div>"
					+"<div class='col-xs-1'> <input class='form-control' type='text' id='col_alias_edit"+i+"' value='"+columnAlias+"'/> </div>"
					+"<div class='col-xs-1'> <input class='form-control' type='text' id='col_table_type_edit"+i+"' value='"+columnType+"'/> </div>"
					+"<div class='col-xs-1'> <input type='radio' name='col_type_edit"+i+"' value='text' checked/></div>"
					+"<div class='col-xs-1'> <input type='radio' name='col_type_edit"+i+"' value='email' /></div>"
					+"<div class='col-xs-1'> <input type='radio' name='col_type_edit"+i+"' value='password' /></div>"
					+"<div class='col-xs-1'> <input type='radio' name='col_type_edit"+i+"' value='number' /></div>"
					+"<div class='col-xs-1'> <input type='radio' name='col_type_edit"+i+"' value='date' /></div>"
					+"<div class='col-xs-1'> <input type='radio' name='col_type_edit"+i+"' value='checkbox' /></div>"
					+"<div class='col-xs-1'> <input type='radio' name='col_type_edit"+i+"' value='radio' /></div>"
					+"<div class='col-xs-1'> <input type='radio' name='col_type_edit"+i+"' value='delete' /></div>"
					+"</div> ";

					textBlock = deleteFirstLine(textBlock);
				}
				//badges \/
				//$("#columns").html(outter);
				$("#columnsEdit").html(outterEditColumns);

				return outter;
			}

			function createCleanedBlock(){
				var textBlock = $("#my_migration").text();

				var start_pos = textBlock.indexOf('') + 0;
				var end_pos = textBlock.indexOf('});',start_pos);
				var cleanedBlock = textBlock.substring(start_pos,end_pos)
				cleanedBlock =  "$table->"+cleanedBlock;
				$("#cleaned").html(cleanedBlock);
				return cleanedBlock;
			}



			function countingColumns(){
				var textBlock = $("#cleaned").text();
				textBlock =  "$table->" + textBlock;
				var regex = new RegExp("'", "gi")
				var count = textBlock.match(regex).length;
				count = count/2;
	    	return count; // minus 2 per "default" found
	    }


	    function deleteFirstLine(textBlock){
	    	// break the textblock into an array of lines
	    	var lines = textBlock.split('\n');
	    	// remove one line, starting at the first position
	    	lines.splice(0,1);
	    	// join the array back into a single string
	    	var newtext = lines.join('\n');
			//alert(newtext);
			return newtext;
		}







		findTypes();
		function findTypes(){

			var rowCount = $('.cols').length;
		     // alert(rowCount);
		    for (var i = 0; i <= rowCount; i++) {
		    	var column_name = $("#col_name_edit"+i+"").val();
		       // alert(column_name);

		      var column_type = $("input[name=col_type_edit"+i+"]:checked").val();
		      var column_table_type = $("#col_table_type_edit"+i+"").val();
		       //alert(column_type);
			// alert(column_name);
			//alert(column_table_type);       	
		       if(column_name != null){
			       if(column_name.indexOf("password") !== -1){
			       	$("input[name='col_type_edit"+i+"'][value='password']").prop('checked', true);
			       }else if(column_name.indexOf("email") !== -1){
			       	$("input[name='col_type_edit"+i+"'][value='email']").prop('checked', true);
			       }else if(column_name.indexOf("number") !== -1){
			       	$("input[name='col_type_edit"+i+"'][value='number']").prop('checked', true);
			       }else if(column_name.indexOf("create") !== -1){
			       	$("input[name='col_type_edit"+i+"'][value='date']").prop('checked', true);
			       }
			       else 
			       if((column_table_type=="increments") || (column_table_type=="foreign") || (column_table_type=="timestamps")){
					$("input[name='col_type_edit"+i+"'][value='delete']").prop('checked', true);
			       }
			       else if(column_name.indexOf("id") !== -1){
			       $("input[name='col_type_edit"+i+"'][value='number']").prop('checked', true);
			       }else if(column_name==""){
						$("input[name='col_type_edit"+i+"'][value='delete']").prop('checked', true);
			       }
		       }
			
		   }

		   //alert("asdf");


		}

	
		
		$("#generate_btn").click(function(){
			
			var rowCount = $('.cols').length;
			var controllerOutput = "";

			var crud_name = $("#crud_name").val();
			var singular = $("#singular").val();
			var plural = $("#plural").val();
			var col_id = $("#col_name_edit0").val();


			$("#crud_name_out").val($("#crud_name").val());

			generateController(crud_name,singular,plural,col_id);
       		generateRoutes(crud_name,singular,plural);
			generateViewCreate();
			generateViewEdit(col_id);
			generateViewIndex(col_id, singular, plural);
			generateViewShow(singular);
			generateModel(crud_name,singular);
			generateRequest(crud_name,singular);
			generateFilesCreated(crud_name,singular);
		});

		function generateController(crud_name,singular,plural,col_id){
			//
			var controllerOutput = "";
			controllerOutput += "<\?php \n |namespace App\\Http\\Controllers; \n |use Illuminate\\Http\\Request; \n |use App\\Http\\Requests;  "; 
			controllerOutput += "\r\n |\n|class "+crud_name+"Controller extends Controller \n |{";
			
			//index
			controllerOutput += "\n |\t/** \n |\t * Display a listing of the resource. \n |\t * \n |\t * @return \\Illuminate\\Http\\Response \n |\t */ \n |\tpublic function index() \n |\t{";
			controllerOutput += "\n |\t\t$"+plural+" = \\App\\Models\\"+crud_name+"::all();";
			controllerOutput += "\n |\t\treturn view('cruds."+singular+".index', compact('"+plural+"'));"; 
			controllerOutput += "\n |\t}";
			
			//create
			controllerOutput += "\n |\n |\t/** \n |\t * Show the form for creating a new resource. \n |\t * \n |\t * @return \\Illuminate\\Http\\Response\n |\t */\n |\tpublic function create()\n |\t {";
			controllerOutput += "\n |\t\tif(999==999){ // input your acl or condition";
			controllerOutput += "\n |\t\t\t//return redirect()->route('cruds."+plural+".create');";
			controllerOutput += "\n |\t\t\treturn view('cruds."+singular+".create');";
			controllerOutput += "\n |\t\t}else{\n |\t\t\treturn redirect()->route('cruds."+plural+".index');\n |\t\t}";
			controllerOutput += "\n |\t}";

			//store
			controllerOutput += "\n |\n |\t/** \n |\t * Store a newly created resource in storage. \n |\t * \n |\t * @param  \\Illuminate\\Http\\Request  $request \n |\t * @return \\Illuminate\\Http\\Response\n |\t */\n |\tpublic function store(\\App\\Http\\Requests\\"+crud_name+"Request $request)\n |\t{//Request $request";
			controllerOutput += "\n |\t\tif(999==999){ // input your acl or condition";
			controllerOutput += "\n |\t\t\t\\App\\Models\\"+crud_name+"::create($request->all());";
			controllerOutput += "\n |\t\t\t\//$last_id = \\App\\"+crud_name+"::limit(1)->orderBy('"+singular+"_id','desc')->value('"+singular+"_id');";
			controllerOutput += "\n |\t\t\t//$"+singular+" = \\App\\"+crud_name+"::create(['model_column'=>$request->input('input_html'),'model_column2'=>$request->input('input_html2'),]);";
			controllerOutput += "\n |\t\t\t//$"+singular+" = new "+crud_name+"; $"+singular+"->name = $request->input('input_html'); $"+singular+"->save(); //insertedId = $"+singular+"->id;";
			controllerOutput += "\n |\t\t\t\\Session::flash('flash_message',[\n |\t\t\t\t'msg'=>\""+crud_name+" successfully stored!\", \n |\t\t\t\t'class'=>\"alert-success\"\n |\t\t\t]);";
			controllerOutput += "\n |\t\t\treturn redirect()->route('cruds."+singular+".index');";
			controllerOutput += "\n |\t\t}else{\n |\t\t\treturn redirect()->route('cruds."+singular+".index');\n |\t\t}";
			controllerOutput += "\n |\t}";

			//show
			controllerOutput += "\n |\n |\t/** \n |\t * Display the specified resource. \n |\t * \n |\t * @param  int  $id \n |\t * @return \\Illuminate\\Http\\Response\n |\t */\n |\tpublic function show($id)\n |\t{";
			controllerOutput += "\n |\t\tif(999==999){ // input your acl or condition";
			controllerOutput += "\n |\t\t\t$"+singular+" = \\App\\Models\\"+crud_name+"::find($id);";

			controllerOutput += "\n |\t\t\t// get previous user id";
			controllerOutput += "\n |\t\t\t$previous = \\App\\Models\\"+crud_name+"::where('"+col_id+"', '<', $"+singular+"->"+col_id+")->max('"+col_id+"');";
			controllerOutput += "\n |\t\t\tif($previous==null){";
			controllerOutput += "\n |\t\t\t\t$previous = \\App\\Models\\"+crud_name+"::orderBy('"+col_id+"','desc')->value('"+col_id+"');";
			controllerOutput += "\n |\t\t\t}";
			controllerOutput += "\n |\t\t\t// get next user id";
			controllerOutput += "\n |\t\t\t$next = \\App\\Models\\"+crud_name+"::where('"+col_id+"', '>', $"+singular+"->"+col_id+")->min('"+col_id+"');";
			controllerOutput += "\n |\t\t\tif($next==0){";
			controllerOutput += "\n |\t\t\t\t$next = \\App\\Models\\"+crud_name+"::orderBy('"+col_id+"','asc')->value('"+col_id+"');";
			controllerOutput += "\n |\t\t\t}";

			//controllerOutput += "\n |\t\t\t//return redirect()->route('cruds."+singular+".show', compact('"+singular+"','previous','next'));";
			controllerOutput += "\n |\t\t\treturn view('cruds."+singular+".show', compact('"+singular+"','previous','next','id'));";
			controllerOutput += "\n |\t\t}else{\n |\t\t\treturn redirect()->route('cruds."+singular+".index');\n |\t\t}";
			controllerOutput += "\n |\t}";


			//edit
			controllerOutput += "\n |\n |\t/** \n |\t * Show the form for editing the specified resource. \n |\t * \n |\t * @param  int  $id \n |\t * @return \\Illuminate\\Http\\Response\n |\t */\n |\tpublic function edit($id)\n |\t{\n |\t";
			controllerOutput += "\n |\t\tif(999==999){ // input your acl or condition";
			controllerOutput += "\n |\t\t\t$"+singular+" = \\App\\Models\\"+crud_name+"::find($id);";
			controllerOutput += "\n |\t\t\treturn view('cruds."+singular+".edit', compact('"+singular+"'));";
			controllerOutput += "\n |\t\t}else{\n |\t\t\treturn redirect()->route('cruds."+singular+".index');\n |\t\t}";
			controllerOutput += "\n |\t}";


			//update
			controllerOutput += "\n |\n |\t/** \n |\t * Update the specified resource in storage. \n |\t *\n |\t * @param  \\Illuminate\\Http\\Request  $request \n |\t * @param  int  $id \n |\t * @return \\Illuminate\\Http\\Response\n |\t */\n |\tpublic function update(\\App\\Http\\Requests\\"+crud_name+"Request $request, $id)\n |\t{//Request $request";
			
			controllerOutput += "\n |\t\tif(999==999){ // input your acl or condition";
			controllerOutput += "\n |\t\t\t\\App\\Models\\"+crud_name+"::find($id)->update($request->all());";
			controllerOutput += "\n |\t\t\t$"+singular+" = \\App\\Models\\"+crud_name+"::find($id);// $"+singular+"->name=Input::get('name');"+singular+"->save()//$request->input('input_html')"; 
			controllerOutput += "\n |\t\t\t\\Session::flash('flash_message',[\n |\t\t\t\t'msg'=>\""+crud_name+" successfully updated!\", \n |\t\t\t\t'class'=>\"alert-success\"\n |\t\t\t]);";
			controllerOutput += "\n |\t\t\treturn redirect()->route('cruds."+singular+".index');";
			controllerOutput += "\n |\t\t}else{\n |\t\t\treturn redirect()->route('cruds."+singular+".index');\n |\t\t}";
			controllerOutput += "\n |\t}";

			//destroy
			controllerOutput += "\n |\n |\t/** \n |\t * Remove the specified resource from storage. \n |\t *\n |\t * @param  int  $id \n |\t * @return \\Illuminate\\Http\\Response\n |\t */\n |\tpublic function destroy($id)\n |\t{";
			controllerOutput += "\n |\t\tif(999==999){ // input your acl or condition";
			controllerOutput += "\n |\t\t\t$"+singular+" = \\App\\Models\\"+crud_name+"::find($id);";
			controllerOutput += "\n |\t\t\t$"+singular+"->delete();";
			controllerOutput += "\n |\t\t\t\Session::flash('flash_message',['\n |\t\t\t\tmsg'=>\""+crud_name+" successfully removed!\", \n |\t\t\t\t'class'=>\"alert-success\"\n |\t\t\t]);";

			controllerOutput += "\n |\t\t\treturn redirect()->route('cruds."+singular+".index');";
			controllerOutput += "\n |\t\t}else{\n |\t\t\treturn redirect()->route('cruds."+singular+".index');\n |\t\t}";
			controllerOutput += "\n |\t}";

			//finalclass
			controllerOutput += "\n |\n |}";
			//alert(controllerOutput);
			$("#controller_out").val(controllerOutput);
			$("#controller_out_post").val(controllerOutput);


			//return controllerOutput;
		}

		function generateRoutes(crud_name,singular,plural){

		    var routes = "//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - "+crud_name+" - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -//\n";
		    routes += "Route::get('/crud/"+singular+"', ['uses' => '"+crud_name+"Controller@index', 'as' => 'cruds."+singular+".index']);\n";
		    routes += "Route::get('/crud/"+singular+"/show/{id}', ['uses' => '"+crud_name+"Controller@show', 'as' => 'cruds."+singular+".show']);\n";
		    routes += "Route::get('/crud/"+singular+"/create', ['uses' => '"+crud_name+"Controller@create', 'as' => 'cruds."+singular+".create']);\n";
		    routes += "Route::post('/crud/"+singular+"/store', ['uses' => '"+crud_name+"Controller@store', 'as' => 'cruds."+singular+".store']);\n";
		    routes += "Route::get('/crud/"+singular+"/edit/{id}', ['uses' => '"+crud_name+"Controller@edit', 'as' => 'cruds."+singular+".edit']);\n";
		    routes += "Route::put('/crud/"+singular+"/update/{id}', ['uses' => '"+crud_name+"Controller@update', 'as' => 'cruds."+singular+".update']);\n";
		    routes += "Route::get('/crud/"+singular+"/destroy/{id}', ['uses' => '"+crud_name+"Controller@destroy', 'as' => 'cruds."+singular+".destroy']);\n";
		    routes += "//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - // "+crud_name+" - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -//\n\n";

		    $("#routes_out").html(routes);
		}

		function generateViewCreate(){

		    // alert('view add');
		    // var singular = $("#alias").html().toLowerCase();
		    var obj = {};

		    function MyObject(_name, _type, _alias, _realType){
		        this.Name = _name;
		        this.Type = _type;
		        this.Alias = _alias;
		        this.RealType = _realType;
		    }

		    $.each($(".cols") , function(key,val){
		        column_name_var = $("#col_name_edit"+key+"").val();
		        column_type_var = $("input[name=col_type_edit"+key+"]:checked").val();
		        column_alias_var = $("#col_alias_edit"+key+"").val();
		        column_realType_var = $("#col_table_type_edit"+key+"").val();

		        obj[key] = new MyObject(column_name_var, column_type_var,column_alias_var, column_realType_var);
		    });
		    // console.log(obj);

			var rowCount = $('.cols').length;
		    var outter = "";

		    outter += "@\extends('layouts.app') \n |";
		    outter += "@\section('title','Create') \n |";
		    outter += "@\section('content') \n | ";

		    outter +="\n |<div class='container'>";
		    outter +="\n |<div class='row'>";
		    outter +="\n |<div class='col-md-10 col-md-offset-1'>";
		    outter +="\n |<div class='panel panel-default'>";
		    outter +="\n |<div class='panel-body'>";
		    outter +="\n |<div class='col-md-12'>";
		    outter +="\n |<form id='saveForm' class='form-horizontal' role='form' method='POST' action='{\{route(\"cruds."+singular+".store\")}}' enctype='multipart/form-data'>";
		    outter +="\n |{\{ csrf_field() }\}";



		    for (var i = 0; i < rowCount; i++) {
	    	
		    	if (obj[i].Type!="delete") {
		            outter +="\n |<!-- --------------------------------"+obj[i].Name+"-------------------------------- -->\n |";
		            outter +="<div class='form-group{\{ $errors->has(\""+obj[i].Name+"\") ? \" has-error\" : \"\" }}'>";
		            outter +="\n |\t";
		            outter +="<label for='"+obj[i].Name+"' class='col-md-4 control-label'>"+obj[i].Alias+"</label>";
		            outter +="\n |\t";
		            outter +="<div class='col-md-6'>";
		            outter +="\n |\t\t";
		            outter +="<input id='"+obj[i].Name+"' type='"+obj[i].Type+"' class='form-control' name='"+obj[i].Name+"' placeholder='"+obj[i].RealType+"/"+obj[i].Type+"'>";
		            outter +="\n |\t\t";
		            outter +="@\if ($errors->has(\""+obj[i].Name+"\"))";
		            outter +="\n |\t\t\t";
		            outter +="<span class='help-block'>\n |\t\t\t\t <strong>{\{ $errors->first(\""+obj[i].Name+"\") }}</strong>\n |\t\t\t </span>";
		            outter +="\n |\t\t";
		            outter +="@\endif \n |\t</div>\n |</div>";
		            outter +="\n |<!-- --------------------------------/"+obj[i].Name+"-------------------------------- -->\n |";
	            }
		    }

		    outter +="\n |<div class='form-group'>";
		    outter +="\n |<label for='' class='col-md-4 control-label'></label>";
		    outter +="\n |<div class='col-md-6'>";
		    outter +="\n |<button class='btn btn-info'>Adicionar</button>";
		    outter +="\n |</div>";
		    outter +="\n |</div>";

		    outter +="\n |</form>";

		    outter +="\n |</div> ";
		    outter +="\n |</div> ";
		    outter +="\n |</div> ";
		    outter +="\n |</div> ";
		    outter +="\n |</div> ";
		    outter +="\n |</div> ";


		    outter +="\n |@"+"endsection";


		    $("#views_create_out").val(outter);    
		    $("#views_create_out_post").val(outter);    
		}

		function generateViewEdit(col_id){
		    
		    //var col_id = $(".columns_array").first().text();
		    //var singular = $("#alias").html().toLowerCase();
		    
		        var obj = {};

		        function MyObject(_name, _type, _alias, _realType){
		            this.Name = _name;
		            this.Type = _type;
		            this.Alias = _alias;
		            this.RealType = _realType;
		        }

		        $.each($(".cols") , function(key,val){
		            column_name_var = $("#col_name_edit"+key+"").val();
		            column_type_var = $("input[name=col_type_edit"+key+"]:checked").val();
		            column_alias_var = $("#col_alias_edit"+key+"").val();
		            column_realType_var = $("#col_table_type_edit"+key+"").val();

		            obj[key] = new MyObject(column_name_var, column_type_var,column_alias_var, column_realType_var);
		        });
		        // console.log(obj);

		    	var rowCount = $('.cols').length;

		    var outter = "";

		    outter += "@\extends('layouts.app') \n |";
		    outter += "@\section('title','Edit') \n |";
		    outter += "@\section('content') \n | ";

		    outter +="\n |<div class='container'>";
		    outter +="\n |<div class='row'>";
		    outter +="\n |<div class='col-md-10 col-md-offset-1'>";
		    outter +="\n |<div class='panel panel-default'>";
		    outter +="\n |<div class='panel-body'>";
		    outter +="\n |<div class='col-md-12'>";
		    outter +="\n |<form id='updateForm' class='form-horizontal' role='form' method='POST' action='{\{route(\"cruds."+singular+".update\", "+"$"+singular+"->"+col_id+")}}' enctype='multipart/form-data'>";
		    outter +="\n |<input type='hidden' name='_method' value='put'>";
		    outter +="\n |{\{ csrf_field() }\}";



		    for (var i = 0; i < rowCount; i++) {
		    	if (obj[i].Type!="delete") {
			        outter +="\n |<!-- --------------------------------"+obj[i].Name+"-------------------------------- -->\n |";
			        outter +="<div class='form-group{\{ $errors->has(\""+obj[i].Name+"\") ? \" has-error\" : \"\" }}'>";
			        outter +="\n |\t";
			        outter +="<label for='"+obj[i].Name+"' class='col-md-4 control-label'>"+obj[i].Alias+"</label>";
			        outter +="\n |\t";
			        outter +="<div class='col-md-6'>";
			        outter +="\n |\t\t";
			        outter +="<input id='"+obj[i].Name+"' type='"+obj[i].Type+"' class='form-control' name='"+obj[i].Name+"' value='{\{$"+singular+"->"+obj[i].Name+"}}'>";
			        outter +="\n |\t\t";
			        outter +="@\if ($errors->has(\""+obj[i].Name+"\"))";
			        outter +="\n |\t\t\t";
			        outter +="<span class='help-block'>\n |\t\t\t\t <strong>{\{ $errors->first(\""+obj[i].Name+"\") }}</strong>\n |\t\t\t </span>";
			        outter +="\n |\t\t";
			        outter +="@\endif \n |\t</div>\n |</div>";
			        outter +="\n |<!-- --------------------------------/"+obj[i].Name+"-------------------------------- -->\n |";
		    	}
		    }

		    outter +="\n |<div class='form-group'>";
		    outter +="\n |<label for='' class='col-md-4 control-label'></label>";
		    outter +="\n |<div class='col-md-6'>";
		    outter +="\n |<button class='btn btn-info'>Atualizar</button>";
		    outter +="\n |</div>";
		    outter +="\n |</div>";

		    outter +="\n |</form>";

		    outter +="\n |</div> ";
		    outter +="\n |</div> ";
		    outter +="\n |</div> ";
		    outter +="\n |</div> ";
		    outter +="\n |</div> ";
		    outter +="\n |</div> ";


		    outter +="\n |@"+"endsection";


		    $("#views_edit_out").val(outter);    
		    $("#views_edit_out_post").val(outter);    

		}


		function generateViewIndex(col_id, singular, plural){
		    // var col_id = $(".columns_array").first().text();
		    // var counter = $(".columns_array").length;

		    // var singular = $("#alias").html().toLowerCase();
		    // var plural = $("#singular").html()+"s";

		        var obj = {};

		        function MyObject(_name, _type, _alias, _realType){
		            this.Name = _name;
		            this.Type = _type;
		            this.Alias = _alias;
		            this.RealType = _realType;
		        }

		        $.each($(".cols") , function(key,val){
		            column_name_var = $("#col_name_edit"+key+"").val();
		            column_type_var = $("input[name=col_type_edit"+key+"]:checked").val();
		            column_alias_var = $("#col_alias_edit"+key+"").val();
		            column_realType_var = $("#col_table_type_edit"+key+"").val();

		            obj[key] = new MyObject(column_name_var, column_type_var,column_alias_var, column_realType_var);
		        });
		        // console.log(obj);

		    	var rowCount = $('.cols').length;
		    // console.log(obj);

		    outter = "";
		    
		    outter += "@\extends('layouts.app') \n |";
		    outter += "@\section('title','View all') \n |";
		    outter += "@\section('content') \n | ";

		    //horizontal
		    outter += "\n |<!-- horizontal -->\n | \n |";
		    outter += "<div class='container'>\n | \t <div class='row'> \n | \t\t<div class='col-xs-12'>\n |";
		    outter += "\n |\t\t<h1>All<small>(horizontal) <a href='{\{route(\"cruds."+singular+".create\")}}'><span class='glyphicon glyphicon-plus pull-right'></span></small></a></h1> \n |";
		    outter +="\t\t\t<div id='masterDiv'>\n |";
		    outter += "\t\t\t@"+"foreach";
		    outter += "($" + plural + " as $" + singular + ")\n |";
		    outter +="\t\t\t<div class='rowDiv'>\n |";
		        for (var i = 0; i < rowCount; i++) {
		    		if (obj[i].Type!="delete") {
		            	outter +="\t\t\t<div class='insideDiv'> <h6>{\{$"+singular+"->" +obj[i].Name + "}}</h6></div>\n |";
		        	}
		        }
		        outter +="\t\t\t<div class='insideDiv text-right'>\n | \t\t\t<a href='{\{route('cruds."+singular+".show',$"+singular+"->"+col_id+")}}' class='btn btn-info'><span class='glyphicon glyphicon-eye-open'></span></a>";
		        outter +="\n | \t\t\t<a href='{\{route('cruds."+singular+".edit',$"+singular+"->"+col_id+")}}' class='btn btn-success'><span class='glyphicon glyphicon-edit'></span></a>";
		        outter +="\n | \t\t\t<a href='#' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>";
		        outter +="\n | \t\t\t</div>\n |";
		        
		        
		        
		    outter +="\t\t\t</div>\n |";
		    outter += "\t\t\t@\endforeach \n |";
		    outter +="\t\t\t</div>";
		    outter += "\n | \t\t</div> \n |\t</div> \n |</div> \n |";

		    outter += "<br><br><br>";

		    //vertical
		    outter += "\n |<!-- vertical -->\n | \n |";
		    outter += "\n |<div class='container'> \n | \t<div class='row'> \n | \t\t<div class='col-xs-12'>";
		    outter += "\n |\t\t<h1>All<small>(vertical)<small></h1>\n |";
		    outter += "\n |\t\t\t@"+"foreach";
		    outter += "($" + plural + " as $" + singular + ")";
		        outter += "\n |\t\t\t<div class='col-xs-3 card'>";
		            for (var i = 0; i < rowCount; i++) {
		            	if (obj[i].Type!="delete") {
		                	outter += "\n |\t\t\t <h5> {\{$"+singular+"->" +obj[i].Name + "}}</h5>";
		            	}
		            }
		        outter +="\n |\t\t\t<div class='text-center'>";
		        outter +="\n |\t\t\t<a href='{\{route('cruds."+singular+".show',$"+singular+"->"+col_id+")}}' class='btn btn-info'><span class='glyphicon glyphicon-eye-open'></span></a>";
		        outter +="\n |\t\t\t<a href='{\{route('cruds."+singular+".edit',$"+singular+"->"+col_id+")}}' class='btn btn-success'><span class='glyphicon glyphicon-edit'></span></a>";
		        outter +="\n |\t\t\t<a href='#' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>";
		        outter +="\n |\t\t\t</div> ";
		        outter += "\n |\t\t\t<br>\n |</div>";
		    outter += "\n |\t\t\t@\endforeach \n |";
		    outter += "\t\t</div> \n | \t</div> \n |</div>";
		    outter += "\n |@"+"endsection";

		    //style and script
		    outter += "\n |<!-- Style and Script -->";
		    outter += "\n |<style>";
		    outter += "\n |#masterDiv{";
		    outter += "\n |width:100%;";
		    outter += "\n |}";
		    outter += "\n |.insideDiv{";
		    outter += "\n |display:inline-block;";
		    outter += "\n |width: 100%;";
		    outter += "\n |display: inline-block;";
		    outter += "\n |vertical-align: middle;";
		    outter += "\n |float: none;";
		    outter += "\n |}";
		    outter += "\n |h6, h5{";
		    outter += "\n |white-space: nowrap; ";
		    outter += "\n |overflow: hidden;";
		    outter += "\n |text-overflow: ellipsis; ";
		    outter += "\n |}";
		    outter += "\n |.rowDiv, .card{";
		    outter += "\n |    border: 1px #eeeeee solid;";
		    outter += "\n |}";
		    outter += "\n |</style>";
		    outter += "\n |<script src='js/jquery-3.1.1.min.js'></"+"script>";
		    outter += "\n |<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></"+"script>";
		    outter += "\n |<script>";
		    outter += "\n |$(document).ready(function(){";
		    outter += "\n |totalItems = $('.insideDiv').length;";
		    outter += "\n |totalRows = $('.rowDiv').length;";
		    outter += "\n |// alert(totalItems);";
		    outter += "\n |// alert(totalRows);";
		    outter += "\n |outter = totalItems/totalRows;";
		    outter += "\n |// alert(outter);";
		    outter += "\n |switch (outter) {";
		    outter += "\n |case 1:";
		    outter += "\n |$('.insideDiv').css('width','100%');";
		    outter += "\n |break;";
		    outter += "\n |case 2:";
		    outter += "\n |$('.insideDiv').css('width','49%'); //50";
		    outter += "\n |break;";
		    outter += "\n |case 3:";
		    outter += "\n |$('.insideDiv').css('width','32%'); //33";
		    outter += "\n |break;";
		    outter += "\n |case 4:";
		    outter += "\n |$('.insideDiv').css('width','24%'); //25";
		    outter += "\n |break;";
		    outter += "\n |case 5:";
		    outter += "\n |$('.insideDiv').css('width','19%'); //20";
		    outter += "\n |break;";
		    outter += "\n |case 6:";
		    outter += "\n |$('.insideDiv').css('width','16%');";
		    outter += "\n |break;";
		    outter += "\n |case 7:";
		    outter += "\n |$('.insideDiv').css('width','14%');";
		    outter += "\n |case 8:";
		    outter += "\n |$('.insideDiv').css('width','12%');";
		    outter += "\n |break;";
		    outter += "\n |case 9:";
		    outter += "\n |$('.insideDiv').css('width','11%');";
		    outter += "\n |break;";
		    outter += "\n |case 10:";
		    outter += "\n |$('.insideDiv').css('width','10%');";
		    outter += "\n |break;";
		    outter += "\n |}";
		    outter += "\n |});";
		    outter += "\n |</"+"script>";

		    $("#views_index_out").val(outter);
		    $("#views_index_out_post").val(outter);

		}


		function generateViewShow(singular){
		    
		    // var singular = $("#alias").html().toLowerCase();
		    
		        var obj = {};

		        function MyObject(_name, _type, _alias, _realType){
		            this.Name = _name;
		            this.Type = _type;
		            this.Alias = _alias;
		            this.RealType = _realType;
		        }

		        $.each($(".cols") , function(key,val){
		            column_name_var = $("#col_name_edit"+key+"").val();
		            column_type_var = $("input[name=col_type_edit"+key+"]:checked").val();
		            column_alias_var = $("#col_alias_edit"+key+"").val();
		            column_realType_var = $("#col_table_type_edit"+key+"").val();

		            obj[key] = new MyObject(column_name_var, column_type_var,column_alias_var, column_realType_var);
		        });
		        // console.log(obj);

		    	var rowCount = $('.cols').length;

		    // console.log(obj);

		    var outter = "";

		    outter += "@\extends('layouts.app') \n |";
		    outter += "@\section('title','Show') \n |";
		    outter += "@\section('content') \n | ";

		    outter +="\n |<div class='container'>";
		    outter +="\n |<div class='row'>";
		    outter +="\n |<div class='col-md-10 col-md-offset-1'>";
		    outter +="\n |<div class='panel panel-default'>";
		    outter +="\n |<div class='panel-body'>";
		    outter +="\n |<div class='col-md-12'>";
		    //outter +="\n |<form id='updateForm' class='form-horizontal' role='form' method='POST' action='{\{route(\'cruds.user.update\', "+"$"+singular+"->id)}}' enctype='multipart/form-data'>";
		    //outter +="\n |<input type='hidden' name='_method' value='put'>";
		    //outter +="\n |{\{ csrf_field() }\}";



		    for (var i = 0; i < rowCount; i++) {
		    	
		    	if (obj[i].Type!="delete") {
			        outter +="<!-- --------------------------------"+obj[i].Name+"-------------------------------- -->\n |";
			        outter +="<div class='form-group{\{ $errors->has(\""+obj[i].Name+"\") ? \" has-error\" : \"\" }}'>";
			        outter +="\n |\t";
			        outter +="<label for='"+obj[i].Name+"' class='col-md-4 control-label'>"+obj[i].Alias+"</label>";
			        outter +="\n |\t";
			        outter +="<div class='col-md-6'>";
			        outter +="\n |\t\t";
			        outter +="<label id='"+obj[i].Name+"' type='"+obj[i].Type+"' class='form-control' name='"+obj[i].Name+"'>{\{$"+singular+"->"+obj[i].Name+"}}<label>";
			        outter +="\n |\t\t";
			        outter +="@\if ($errors->has(\""+obj[i].Name+"\"))";
			        outter +="\n |\t\t\t";
			        outter +="<span class='help-block'>\n |\t\t\t\t <strong>{\{ $errors->first(\""+obj[i].Name+"\") }}</strong>\n |\t\t\t </span>";
			        outter +="\n |\t\t";
			        outter +="@\endif \n |\t</div>\n |</div>";
			        outter +="\n |<!-- --------------------------------/"+obj[i].Name+"-------------------------------- -->\n |";
		    	}
		    }

		    outter +="\n |<div class='form-group'>";
		    outter +="\n |<label for='' class='col-md-4 control-label'></label>";
		    outter +="\n |<div class='col-md-6'>";
		    outter +="\n |<a href='{\{route('cruds."+singular+".index')}}' class='btn btn-info'>Voltar</a>";
		    outter +="\n |<br><br>";
		    outter +="\n |<a href='{\{route('cruds."+singular+".show',$previous)}}' class='glyphicon glyphicon-chevron-left'></a>";
		    outter +="\n |<span class='badge'>{\{$id}}</span>";
		    outter +="\n |<a href='{\{route('cruds."+singular+".show',$next)}}' class='glyphicon glyphicon-chevron-right'></a>";
		    outter +="\n |</div>";
		    outter +="\n |</div>";

		    //outter +="\n |</form>";

		    outter +="\n |</div> ";
		    outter +="\n |</div> ";
		    outter +="\n |</div> ";
		    outter +="\n |</div> ";
		    outter +="\n |</div> ";
		    outter +="\n |</div> ";


		    outter +="\n |@"+"endsection";


		    $("#views_show_out").val(outter);    
		    $("#views_show_out_post").val(outter);    

		}


		function generateModel(crud_name,singular){
		    //alert('model');

		    // var alias = $("#alias").html();
		    // var singular = $("#alias").html().toLowerCase();
		        var obj = {};

		        function MyObject(_name, _type, _alias, _realType){
		            this.Name = _name;
		            this.Type = _type;
		            this.Alias = _alias;
		            this.RealType = _realType;
		        }

		        $.each($(".cols") , function(key,val){
		            column_name_var = $("#col_name_edit"+key+"").val();
		            column_type_var = $("input[name=col_type_edit"+key+"]:checked").val();
		            column_alias_var = $("#col_alias_edit"+key+"").val();
		            column_realType_var = $("#col_table_type_edit"+key+"").val();

		            obj[key] = new MyObject(column_name_var, column_type_var,column_alias_var, column_realType_var);
		        });
		        // console.log(obj);

		    	var rowCount = $('.cols').length;
		    var outter = "";

		    outter +="";

		    outter+="<\?php";
		    outter+=" \n | ";
		    outter+=" \n |namespace App\\Models;";
		    outter+=" \n | ";
		    outter+=" \n | use Illuminate\\Database\\Eloquent\\Model;";
		    outter+=" \n | ";
		    outter+=" \n | class "+crud_name+" extends Model";
		    outter+=" \n | {";
		    outter+=" \n | \t\t//protected $table = 'furys';//table name";
		    outter+=" \n | \t\t//protected $primaryKey = 'pdt_id';//table pk";
		    outter+=" \n | \t\tprotected $fillable = [";
		    outter+=" \n | \t\t\t";

		    for (var i = 1; i < rowCount; i++) {
		    	if (obj[i].Type!="delete") {
			        outter +="'"+obj[i].Name+"', ";
			    }
		    }

		    outter+=" \n | \t\t];";
		    
		    outter+=" \n | ";
		    outter+=" \n | \t\t//public function hasManyFunction(){";
		    outter+=" \n | \t\t//  return $this->hasMany('HasManyFromThis-App\\OtherModelName','OtherTableId-column_table','thisTableRelationId-id');";
		    outter+=" \n | \t\t//}";
		    outter+=" \n |";
		    outter+=" \n | \t\t//public function belongsToThisModelItem(){";
		    outter+=" \n | \t\t//return $this->belongsToMany('belongsToThis-App\\OtherModelName');";
		    outter+=" \n | \t\t//}";
		    outter+=" \n |";
		    outter+=" \n | \t\t//public function hasOne/singularName(){";
		    outter+=" \n | \t\t//return $this->hasOne('HasOneOfThis-App\\OtherModelName','OtherTableId-column_table','thisTableRelationId-id')";
		    outter+=" \n | \t\t//}";





		    outter+=" \n | }";

		    

		    $("#model_out").val(outter);    
		    $("#model_out_post").val(outter);    

		}


		function generateRequest(crud_name,singular){
		    //alert('model');

		    // var alias = $("#alias").html();
		    // var singular = $("#alias").html().toLowerCase();
		        var obj = {};

		        function MyObject(_name, _type, _alias, _realType){
		            this.Name = _name;
		            this.Type = _type;
		            this.Alias = _alias;
		            this.RealType = _realType;
		        }

		        $.each($(".cols") , function(key,val){
		            column_name_var = $("#col_name_edit"+key+"").val();
		            column_type_var = $("input[name=col_type_edit"+key+"]:checked").val();
		            column_alias_var = $("#col_alias_edit"+key+"").val();
		            column_realType_var = $("#col_table_type_edit"+key+"").val();

		            obj[key] = new MyObject(column_name_var, column_type_var,column_alias_var, column_realType_var);
		        });
		        // console.log(obj);

		    	var rowCount = $('.cols').length;
		    var outter = "";

		    outter +="";

		    outter+="<\?php";
		    outter+=" \n | ";
		    outter+=" \n | namespace App\\Http\\Requests;";
		    outter+=" \n | ";
		    outter+=" \n | use Illuminate\\Foundation\\Http\\FormRequest;";
		    outter+=" \n | ";
		    outter+=" \n | class "+crud_name+"Request extends FormRequest";
		    outter+=" \n | {";

		    outter+=" \n | \t\t/**";
		    outter+=" \n | \t\t * Determine if the user is authorized to make this request.";
		    outter+=" \n | \t\t *";
		    outter+=" \n | \t\t * @return bool";
		    outter+=" \n | \t\t */";
		    outter+=" \n | \t\tpublic function authorize()";
		    outter+=" \n | \t\t{";
		    outter+=" \n | \t\t\treturn true;";
		    outter+=" \n | \t\t}";
		    outter+=" \n |";
		    outter+=" \n | \t\t/**";
		    outter+=" \n | \t\t * Get the validation rules that apply to the request.";
		    outter+=" \n | \t\t *";
		    outter+=" \n | \t\t * @return array";
		    outter+=" \n | \t\t */";
		    outter+=" \n | \t\t";
		    outter+=" \n | \t\tpublic function rules()";
		    outter+=" \n | \t\t{";
		    outter+=" \n | \t\t\treturn [";

		    for (var i = 1; i < rowCount; i++) {
		    	if (obj[i].Type!="delete") {
			        outter +="\n | \t\t\t\t'"+obj[i].Name+"'=>'required|max:20',";
			    }
		    }

		    outter+=" \n | \t\t\t];";
		    outter+=" \n | \t\t}";

		        outter+=" \n | \t\tpublic function messages()";
		        outter+=" \n | \t\t{";
		        outter+=" \n | \t\t\treturn [";

		        for (var i = 1; i < rowCount; i++) {
		        	if (obj[i].Type!="delete") {
		    	        outter +="\n | \t\t\t\t'"+obj[i].Name+".required'=>'Field required',";
		    	    }
		        }

		        outter+=" \n | \t\t\t];";
		        outter+=" \n | \t\t}";
		    outter+="\n | //rules options: max:number|min:number|email|unique:posts|bail|nullable|date";

		    outter+=" \n | }";

		    

		    $("#request_out").val(outter);    
		    $("#request_out_post").val(outter);    

		}

		function generateFilesCreated(crud_name,singular){

		    
		    let outter = "/app/Http/Controllers/"+crud_name+"Controller.php";
		    outter += "\n";
		    outter += "\n/app/Models/"+crud_name+".php";
		    outter += "\n";
		    outter += "\n/app/Http/Requests/"+crud_name+"Request.php";
		    outter += "\n";
		    outter += "\n/resources/views/cruds/"+singular+"/create.blade.php";
		    outter += "\n/resources/views/cruds/"+singular+"/edit.blade.php";
		    outter += "\n/resources/views/cruds/"+singular+"/index.blade.php";
		    outter += "\n/resources/views/cruds/"+singular+"/show.blade.php";


		    // alert(outter);
		    $("#files_created_out").val(outter);    
		    //$("#files_created_out_post").val(outter);    //there is no post right here...i guess...tired...

		}





		$("#updateCode").click(function(){
			    $("#model_out_post").val($("#model_out").val());   
		        $("#views_show_out_post").val($("#views_show_out").val());    
		        $("#views_index_out_post").val($("#views_index_out").val());
		        $("#views_edit_out_post").val($("#views_edit_out").val());    
		        $("#views_create_out_post").val($("#views_create_out").val());    
		    	$("#controller_out_post").val($("#controller_out").val());
		    	$("#crud_name_out").val($("#crud_name").val());
		});




		// $("#createFilesBtn").click(function(){
		// 	// alert("fodaci");
		// 	var output = generateFinalArray();
		// 	// alert(output);
		// 	var obj = jQuery.parseJSON(output); 
		// 	// alert(obj);
		// 	var myJSON = JSON.stringify(obj);
		// 	// alert(myJSON);

		// 	$.ajax({
		// 	   type:'POST',
		// 	   url:'/fury/create',
		// 	    data: {
		// 	        '_token' : $('input[name=_token]').val(),
		// 	        'jsonObj' : myJSON,
		// 	    },
		// 	    headers: {
		// 	      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		// 	    },

		// 	   success:function(data){
		// 	        window.location.href = "/fury/generate/"+myJSON+""; //thisok!!!
		// 	        //console.log("success \n"+ data['cols'][0]['col_name']); OK!!!
		// 	        console.log("success \n"+ data);

		// 	   },
		// 	   error:function(data){
		// 	        //window.location.href = "/fury";
		// 	        console.log("error \n"+ data);
		// 	   }
		// 	});
		// });


	});
</script>
</body>
</html>
