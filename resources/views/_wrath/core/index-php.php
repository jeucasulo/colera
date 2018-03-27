<?php  
class index{
	
		public static function checkFiles(){
			$wrath_controller = '../app/Http/Controllers/WrathController.php';

			if (file_exists($wrath_controller)) {
			    echo "<div>";
			    echo "<div class='row'><div class='col-xs-5'><p>WrathController.php</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			    echo "</div>";
			} else {
			    copy("../resources/views/_wrath/package/WrathController.php", "'../../../app/Http/Controllers/WrathController.php");
			    echo "<div>";
			    echo "<div class='row'><div class='col-xs-5'><p>WrathController.php created</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			    echo "</div>";
			}

			$WrathModelsPath = '../app/ACL';

			$PermissionModel = $WrathModelsPath.'/Permission.php';
			$RoleModel = $WrathModelsPath.'/Role.php';
			$UserModel = $WrathModelsPath.'/User.php';
			$RoleTableMigration = "../database/migrations/2017_04_05_075725_create_roles_table.php";
			$PermissionTableMigration = "../database/migrations/2017_04_05_075742_create_permissions_table.php";

			if(!file_exists($WrathModelsPath)){
				mkdir($WrathModelsPath, 0700);
			}


			if (file_exists($PermissionModel)) {
			    echo "<div>";
			    echo "<div class='row'><div class='col-xs-5'><p>Model Permission.php</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			    echo "</div>";
			} else {
				copy("../resources/views/_wrath/package/Permission.php", "'../../../app/ACL/Permission.php");
				echo "<div>";
			 	echo "<div class='row'><div class='col-xs-5'><p>Model Permission.php created</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			 	echo "</div>";
			}

			if (file_exists($RoleModel)) {
			    echo "<div>";
			    echo "<div class='row'><div class='col-xs-5'><p>Model Role.php</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			    echo "</div>";
			} else {
				copy("../resources/views/_wrath/package/Role.php", "'../../../app/ACL/Role.php");
				echo "<div>";
			 	echo "<div class='row'><div class='col-xs-5'><p>Model Role.php created</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			 	echo "</div>";
			}

			if (file_exists($UserModel)) {
			    echo "<div>";
			    echo "<div class='row'><div class='col-xs-5'><p>Model User.php</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			    echo "</div>";
			} else {
				copy("../resources/views/_wrath/package/User.php", "'../../../app/ACL/User.php");
				echo "<div>";
			 	echo "<div class='row'><div class='col-xs-5'><p>Model User.php created</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			 	echo "</div>";
			}

			if (file_exists($RoleTableMigration)) {
			    echo "<div>";
			    echo "<div class='row'><div class='col-xs-5'><p>Migration RoleTable.php</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			    echo "</div>";
			} else {
				// echo "nao existe role";
				copy("../resources/views/_wrath/package/2017_04_05_075725_create_roles_table.php", "../database/migrations/2017_04_05_075725_create_roles_table.php");
				echo "<div>";
			 	echo "<div class='row'><div class='col-xs-5'><p>Migration RoleTable.php created</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			 	echo "</div>";
			}

			if (file_exists($PermissionTableMigration)) {
			    echo "<div>";
			    echo "<div class='row'><div class='col-xs-5'><p>Migration PermissionTable.php</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			    echo "</div>";
			} else {
				copy("../resources/views/_wrath/package/2017_04_05_075742_create_permissions_table.php", "../database/migrations/2017_04_05_075742_create_permissions_table.php");
				echo "<div>";
			 	echo "<div class='row'><div class='col-xs-5'><p>Migration PermissionTable.php created</p></div><div class='col-xs-1'><p class='text-success'>✔</p></div></div>";
			 	echo "</div>";
			}





		}
}

?>
