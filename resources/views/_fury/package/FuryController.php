<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Schema;
use File;
use Storage;
class FuryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function migration()
    {
        $migrations_model = '../app/Migration.php';
        $fury_controller = '../app/Http/Controllers/FuryController.php';

        if(Schema::hasTable('migrations')){
            // echo "ok";
            if((file_exists($migrations_model))&&(file_exists($fury_controller))){
                $migrations = \App\Migration::all();
                //$money = 10;
                //dd($migrations);
                return view('_colera/fury.migration', compact('migrations'));            
            }else{
                return "<h1>First you need to copy the Migration and Controller files</h1>";
            }
        }else{
             echo "<h1>You need the migration table</h1>";
        }


            
    }


    public function generate($id){
        
        $migration = \App\Migration::find($id);

        //dd($migration);
        
        return view("_colera.fury.generate", compact('migration'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $crud_name = $request->crud_name_out;
        // dd($crud_name);
        $controller = $request->controller_out_post;
        $model = $request->model_out_post;
        $requestVar =  $request->request_out_post;
         // dd($request);
        $viewCreate = $request->views_create_out_post;
        $viewEdit = $request->views_edit_out_post;
        $viewIndex = $request->views_index_out_post;
        $viewShow = $request->views_show_out_post;



        $this->createCrudsFolder(); 
        $this->createTableFolder($crud_name);  

        $this->createController($crud_name, $controller);
        $this->createModel($crud_name, $model);
        $this->createRequest($crud_name, $requestVar);

        $this->createView($crud_name, $viewCreate, "create");
        $this->createView($crud_name, $viewEdit, "edit");
        $this->createView($crud_name, $viewIndex, "index");
        $this->createView($crud_name, $viewShow, "show");

    }

    


    public function createCrudsFolder(){
        $path = '../resources/views/cruds';

        if(File::exists($path)) {
            //echo("Folder already exists in: " .$path."<br>");
        }else{
            File::makeDirectory($path, $mode = 0777, true, true);
            //echo "Folder created at :".$path;

        }

    }

    function createTableFolder($crud_name){
        $crud_name = strtolower($crud_name);
        $myPath = '../resources/views/cruds/'.$crud_name;

        if(!File::exists($myPath)){
            File::makeDirectory($myPath, $mode = 0777, true, true);
        }

    }

    function createController($crud_name, $controller){

        // $crud_name = substr($crud_name, 0, -1);

        $myPath = "../app/Http/Controllers/".$crud_name."Controller.php";

        if (file_exists($myPath)) {
            unlink($myPath);
        } 

        $controller = str_replace('|',"\r",$controller);
        $myfile = fopen($myPath, "w") or die("Unable to open file!");
        fwrite($myfile, $controller);
        fclose($myfile);
        $str=file_get_contents($myPath);
        $str=str_replace('<br />',"",$str);
        $myfile = fopen($myPath, "w") or die("Unable to open file!");
        fwrite($myfile, $str);
        fclose($myfile);
    }


    function createModel($crud_name, $model){

        $modelsPath = "../app/Models";
        if(!file_exists($modelsPath)){
            mkdir($modelsPath, 0700);
        }

        $myPath = "../app/Models/".$crud_name.".php";

        if (file_exists($myPath)) {
            unlink($myPath);
        } 

        $model = str_replace('|',"\r",$model);
        $myfile = fopen($myPath, "w") or die("Unable to open file!");
        fwrite($myfile, $model);
        fclose($myfile);
        $str=file_get_contents($myPath);
        $str=str_replace('<br />',"",$str);
        $myfile = fopen($myPath, "w") or die("Unable to open file!");
        fwrite($myfile, $str);
        fclose($myfile);
    }

    function createRequest($crud_name, $requestVar){


        $resquestPath = "../app/Http/Requests";
        $myPath = "../app/Http/Requests/".$crud_name."Request.php";

        if (file_exists($resquestPath)) {
            echo "Folder exist";
            if(file_exists($myPath)){
                unlink($myPath);
            }

        } else{
            echo "Folder";
            mkdir("../app/Http/Requests", 0700);
        }
    //(!file_exists($dir) == true),

        //mkdir("../app/Http/Requests");
        //fwrite($myPath,"teste");

        $requestVar = str_replace(' | ',"\r",$requestVar);
        $myfile = fopen($myPath, "w") or die("Unable to open file!");
        fwrite($myfile, $requestVar);
        fclose($myfile);
        $str=file_get_contents($myPath);
        $str=str_replace('<br />',"",$str);
        $myfile = fopen($myPath, "w") or die("Unable to open file!");
        fwrite($myfile, $str);
        fclose($myfile);
    }

    function createView($crud_name, $viewCodeContent, $viewName){

        $crud_name = strtolower($crud_name);
        $myPath = '../resources/views/cruds/'.$crud_name;

        $viewPath = $myPath."/".$viewName.".blade.php";
        
        if(file_exists($viewPath)){
            unlink($viewPath);
        }

        //dd($viewCodeContent);
        $viewCodeContent = str_replace('|',"\r",$viewCodeContent);
        
        file_put_contents($viewPath, $viewCodeContent);// create
        
    }




    
    

    // public function files($id){

    //     $migration = \App\Migration::find($id);
        
    //     $columns = \App\Fury::where(['column_table'=>$migration->id])->get();
        

    //     $path = '../resources/views/cruds';

    //     if(File::exists($path)) {
    //         //echo("Folder already exists in: " .$path."<br>");
    //     }else{
    //         File::makeDirectory($path, $mode = 0777, true, true);
    //         //echo "Folder created at :".$path;

    //     }

    //     return view('fury.fury-files', compact('migration','columns'));

    // }

    // public function createFiles(Request $request){

    //     $id = $request->migration_id;
    //     $migrations = \App\Migration::find($id);

    //     $controller = $request->controller_out_post;        //echo $controller;
        
    //     $viewCodeContent = $request->views_add_out_post;        //echo $controller;
    //     $viewEdit = $request->views_edit_out_post;        //echo $controller;
    //     $viewIndexH = $request->views_index_out_post;        //echo $controller;
    //     $viewShow = $request->views_show_out_post;

    //     /*           find out the name of the file         */
    //     $str = $migrations->migration;
    //     $word1 = '_create_';
    //     $word2 = '_table';
    //     preg_match('/'.preg_quote($word1).'(.*?)'.preg_quote($word2).'/is', $str, $match);
    //     $crud_name = $match[1]; // principal name
    //     $crud_name = $this->dashesToCamelCase($crud_name);
    //     $crud_name = ucfirst($crud_name);
    //     /*           find out the name of the file         */


    //     /*           create controller         */
    //     $this->createController($crud_name, $controller);
    //                create controller         
        
    //     /*           delete old folder         */
    //     $this ->createTableFolder($crud_name);
    //     /*           delete old folder         */

    //     /*           create view add         */
    //     $this->createView($crud_name, $viewCodeContent, "create");
    //     /*           create viwe add         */

    //     /*           create view  edit       */
    //     $this->createView($crud_name, $viewEdit, "edit");
    //     /*           create viwe  edit       */

    //     /*           index-h       */
    //     $this->createView($crud_name, $viewIndexH, "index");
    //     /*           index-h       */

    //     /*           index-h       */
    //     $this->createView($crud_name, $viewShow, "show");
    //     /*           index-h       */

        
            


    //     return view('welcome');

    // }

    


    function dashesToCamelCase($string, $capitalizeFirstCharacter = false) 
    {

        $str = str_replace('_', '', ucwords($string, '_'));
        if (!$capitalizeFirstCharacter) {
            $str = lcfirst($str);
        }
        return $str;
    }

    //echo dashesToCamelCase('this-is-a-string');


}