
<html>
<head>
	<meta charset="UTF-8">
	<title>Migrations</title>




	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/colera-asset/bootstrap-3.3.7-dist/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="/colera-asset/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

	

</head>
<body>teset

<div class="container">
	<div class="row">
		<div class="col-xs-12">
		<h1><a href="/fury" style="color:#333">Laravel Fury</a> <small>just fury it</small></h1>
<br>
		<h3>Migrations</h3>
			
			@foreach($migrations as $migration)
				<div class="row thisRow migration_rows">
					<div class="col-xs-4">
						<p id="migration_name{{$migration->id}}">{{$migration->migration}}</p><br><small id="crud_name{{$migration->id}}" class="text-info"></small>
					</div>
					
					<div class="col-xs-3" style="font-size: 10px; display: none" >
						<?php
						$mypath = "../database/migrations/".$migration->migration.".php";
						$myfile = fopen($mypath, "r") or die("Unable to open file!");
						echo "<div id='my_migration".$migration->id."' class='my_migrations' style='display:'>";
						echo fread($myfile,filesize($mypath));
						echo "</div>";
						echo "<br>";
						echo "<br>";
						fclose($myfile);
						?>
					</div>
					<div class='col-xs-4 cleaned{{$migration->id}}' >
						
					</div>
					<div class='col-xs-3 out{{$migration->id}}' >
						
					</div>

					<div class='col-xs-1' >
						<a href='{{route("fury.generate",$migration->id)}}' class='btn btn-default' val='olares'>Create</a>	
					</div>

					
				</div>
					
				<hr>
			@endforeach

		
		</div>
	</div>
</div>


<div class="container-fluid" style="display: none" id="div_out" >
	<div class="row">
		<div class="col-xs-12">
			

			
			output cru in start <br>
			{ <br>
			"rows": [  <br>
			{"column_name":"id","column_type":"number","column_table":"8","column_alias":"Id"} <br>
			, <br>
			{"column_name":"name","column_type":"text","column_table":"8","column_alias":"Name"} <br>
			, <br>
			{"column_name":"email","column_type":"email","column_table":"8","column_alias":"Email"} <br>
			, <br>
			{"column_name":"password","column_type":"password","column_table":"8","column_alias":"Password"} <br>
			]  <br>
			} <br>
			output cru in end <br>

			<br>
			<br>
			<br>

			var obj = jQuery.parseJSON(output); //start <br>
			Object {rows: Array[4]} <br>
			var obj = jQuery.parseJSON(output); // end <br>


			<br>
			<br>
			<br>

			myArray = generateArray(); //start <br>
			Object {rows: Array[4]} <br>
			myArray = generateArray(); // end <br>


			<br>
			<br>
			<br>

			var myJSON = JSON.stringify(myArray); //start <br>
			{"rows":[{"column_name":"id","column_type":"number","column_table":"8","column_alias":"Id"},{"column_name":"name","column_type":"text","column_table":"8","column_alias":"Name"},{"column_name":"email","column_type":"email","column_table":"8","column_alias":"Email"},{"column_name":"password","column_type":"password","column_table":"8","column_alias":"Password"}]} <br>
			var myJSON = JSON.stringify(myArray); // end <br>

				
			
			
			
		</div>
	</div>
</div>


<section id="generate_section">
	
</section>

<script src="/colera-asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="/colera-asset/bootstrap-3.3.7-dist/js/bootstrap.min.js" ></script>

<script>
	$(document).ready(function(){

		var obj = {};



		function MyObject(_id,_name, _type, _alias){
		    this.ColumnId = _id;
		    this.ColumnName = _name;
		    this.ColumnType = _type;
		    this.ColumnAlias = _alias;
		}

		var migrationCount = $(".my_migrations").length;

		startApp();

		function startApp(){
			for (var i = 0; i < migrationCount+1; i++) {
				//var textBlock = $("#my_migration"+i+"").text();
				var textBlock = $("#my_migration"+i+"").text();
				if(textBlock != ""){
				textBlock = cleanBlock(textBlock,i);//after FirstColumn
				var countColumns = countingColumns(textBlock);
				var total = countColumns/2;
				var outter = "";
//				var outterXML = "";
				///alert("countColumns:" + countColumns + ". Total: " +total);

					for (var j = 0; j < total; j++) {
						outter += findColumns(textBlock,j,i);
						textBlock = deleteFirstLine(textBlock);
					}
					
//alert(outter);
					$(".out"+i+"").html(outter);
				}
			}
		}

		function cleanBlock(textBlock,i){
	        var start_pos = textBlock.indexOf('') + 0;
	        var end_pos = textBlock.indexOf('});',start_pos);
	        var cleanedBlock = textBlock.substring(start_pos,end_pos)
        	cleanedBlock =  "$table->"+cleanedBlock;
        	$(".cleaned"+i+"").html(cleanedBlock);
        	return cleanedBlock;
	    }

	    
	    function countingColumns(textBlock){
	    	var regex = new RegExp("'", "gi")
	    	var count = textBlock.match(regex).length;
	    	return count; // minus 2 per "default" found
	    }

        function getFirstLine(textBlock){
        	var str = textBlock.substr(0, textBlock.indexOf("\n"));
    		
        	return str;
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


		function findColumns(textBlock,i,counter){

			migration_name = $("#migration_name"+counter+"").text();
			

			//alert(migration_name);


			var start_pos = textBlock.indexOf('$table->') + 8;
			var end_pos = textBlock.indexOf('(',start_pos);
			var columnType = textBlock.substring(start_pos,end_pos)

			var start_pos = textBlock.indexOf('\'') + 1;
			var end_pos = textBlock.indexOf('\'',start_pos);
			var columnName = textBlock.substring(start_pos,end_pos)

			var columnAlias = columnName.toLowerCase().replace(/\b[a-z]/g, function(letter) {
			    return letter.toUpperCase();
			});


			obj[i] = new MyObject(i,columnName, columnType,columnAlias);
			

			outter = "<span><span class='columns"+counter+"'>index: "+obj[i].ColumnId+"</span> <span id='column_name"+counter+i+"'>"+obj[i].ColumnName +"</span> (<span id='column_type"+counter+i+"'>"+ obj[i].ColumnType+"</span>) - <span id='column_alias"+counter+i+"'>" + obj[i].ColumnAlias+"</span><br></span>";

			
			//console.log(obj[i]);

			return outter;
		}
		findCrudName();
		
		function findCrudName(){
			
		    var rowCount = $('.migration_rows').length;
		    // alert(rowCount);

			for (var i = 0; i < rowCount+1; i++) {
				var textBlock = $("#migration_name"+i+"").text();
				var test_str = textBlock;
				var start_pos = test_str.indexOf('_create_') + 8;
				var end_pos = test_str.indexOf('_table',start_pos);
				var text_to_get = test_str.substring(start_pos,end_pos)
				//alert(text_to_get);
				text_to_get = toPascalCase(text_to_get);
				//alert(text_to_get);
				text_to_get = text_to_get.slice(0,-1)
				// alert(text_to_get);
				$("#crud_name"+i+"").text(text_to_get);

			}


		}

	    function toPascalCase(str) { //first letter capitalize and after underline Too
	        var arr = str.split(/\s|_/);
	        for(var i=0,l=arr.length; i<l; i++) {
	            arr[i] = arr[i].substr(0,1).toUpperCase() + 
	            (arr[i].length > 1 ? arr[i].substr(1).toLowerCase() : "");
	        }
	        return arr.join("");
	    }

// --------------------------------------------------------------------------




		
	});
</script>
</body>
</html>;
