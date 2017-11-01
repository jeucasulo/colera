<?php  
class index{
	
		public static function checkFiles(){
			$migrations_model = '../app/Migration.php';

			if (file_exists($migrations_model)) {
			    echo "<div>";
			    echo "<div class='row'><div class='col-xs-5'><p>Model User.php</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			    echo "</div>";
			} else {
			    copy("../resources/views/_colera/fury/package/Migration.php", "'../../../app/Migration.php");
			    echo "<div>";
			    echo "<div class='row'><div class='col-xs-5'><p>Model Migration.php created</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			    echo "</div>";
			}

			$fury_controller = '../app/Http/Controllers/FuryController.php';

			if (file_exists($fury_controller)) {
			    echo "<div>";
			    echo "<div class='row'><div class='col-xs-5'><p>Controller FuryController.php</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			    echo "</div>";
			} else {
				copy("../resources/views/_colera/fury/package/FuryController.php", "'../../../app/Http/Controllers/FuryController.php");
				echo "<div>";
			 	echo "<div class='row'><div class='col-xs-5'><p>Controller FuryController.php created</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			 	echo "</div>";
			}
		}
}

?>
