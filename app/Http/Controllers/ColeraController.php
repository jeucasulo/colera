<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColeraController extends Controller
{
    public function furyInstall(){

    	if (file_exists("'../../../resources/views/_fury")) {
    		return "Fury already installed";
    	}

    	mkdir("'../../../resources/views/_fury", 0777, true);
    	mkdir("'../../../resources/views/_fury/core", 0777, true);
    	mkdir("'../../../resources/views/_fury/js", 0777, true);
    	mkdir("'../../../resources/views/_fury/package", 0777, true);

    	$this->recurse_copy("../resources/views/_colera/fury","'../../../resources/views/_fury");

        return "Fury installed!";
    }

    public function furyUninstall(){

    	if (!file_exists("'../../../resources/views/_fury")) {
    		return "Fury not installed";
    	}
    	$this->recurse_delete("'../../../resources/views/_fury");
    }

    public function wrathInstall(){

        if (file_exists("'../../../resources/views/_wrath")) {
            return "Wrath already installed";
        }

        mkdir("'../../../resources/views/_wrath", 0777, true);
        mkdir("'../../../resources/views/_wrath/core", 0777, true);
        mkdir("'../../../resources/views/_wrath/js", 0777, true);
        mkdir("'../../../resources/views/_wrath/package", 0777, true);

        $this->recurse_copy("../resources/views/_colera/wrath","'../../../resources/views/_wrath");

        return "Wrath installed!";
    }

    public function wrathUninstall(){

        if (!file_exists("'../../../resources/views/_wrath")) {
            return "Wrath not installed";
        }
        $this->recurse_delete("'../../../resources/views/_wrath");
    }



    public function recurse_copy($src,$dst) { 
        $dir = opendir($src); 
        @mkdir($dst); 
        while(false !== ( $file = readdir($dir)) ) { 
            if (( $file != '.' ) && ( $file != '..' )) { 
                if ( is_dir($src . '/' . $file) ) { 
                    $this->recurse_copy($src . '/' . $file,$dst . '/' . $file); 
                } 
                else { 
                    copy($src . '/' . $file,$dst . '/' . $file); 
                } 
            } 
        } 
        closedir($dir); 
    } 


	public  function recurse_delete($dir) { 
	   	$files = array_diff(scandir($dir), array('.','..')); 
		   	foreach ($files as $file) { 
		      	(is_dir("$dir/$file")) ? $this->recurse_delete("$dir/$file") : unlink("$dir/$file"); 
		    } 
    return rmdir($dir); 
  	} 





}
