<?php

namespace App\Http\Controllers;

use Schema;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use Auth;

class WrathController extends Controller
{
    
	public function __construct()
    {
        $this->middleware('auth');
        $this->user =  \Auth::user();
    }

    // public function wrath(){
    //     $users = \App\User::all();
        
    //     return view('wrath.wrath', compact('users'));
    // }

    public function dashboard(){
        if((Schema::hasTable('roles'))&&(Schema::hasTable('permissions'))){
            $users = \App\ACL\User::all();
            
            return view('_wrath.wrath',compact('users'));
        }else{
            return "You need both the Roles and Permissions tables...maybe run your migrations...";
        }

        
        
    }

    public function user($id){
    	$user = \App\ACL\User::find($id);
    	$roles =\App\ACL\Role::all();
        // dd($roles);

    	return view('_wrath.user', compact('user','roles'));
    }

    public function userRoleAttach(Request $request){
    	if(999==999){ // input your acl or condition 
    		
            //$user = Auth::user();
			$user = \App\ACL\User::find($request->user_id);
			$roleId = (int)$request->new_role;
    		$user->roles()->attach($roleId);
    		// $user->roles()->detach($roleId);

    		//$last_id = \App\Role::limit(1)->orderBy('role_id','desc')->value('role_id'); 
    		//$role = \App\Role::create(['model_column'=>$request->input('input_html'),'model_column2'=>$request->input('input_html2'),]); 
    		//$role = new Role; $role->name = $request->input('input_html'); $role->save(); //insertedId = $role->id; 
    		\Session::flash('flash_message',[ 
    			'msg'=>"Role successfully stored!",  
    			'class'=>"alert-success" 
    		]); 
    		return redirect()->route('acl.user',$user->id); 
    	}else{ 
    		return redirect()->route('acl'); 
    	} 

    }

        public function userRoleDettach(Request $request){
        	if(999==999){ 
        		
    			//$user = Auth::user();
                $user = \App\ACL\User::find($request->user_id);
    			$roleId = (int)$request->dettach_role;
    		    $user->roles()->detach($roleId);


        		\Session::flash('flash_message',[ 
        			'msg'=>"Role successfully deleted!",  
        			'class'=>"alert-success" 
        		]); 
        		return redirect()->route('acl.user',$user->id); 
        	}else{ 
        		return redirect()->route('acl'); 
        	} 

        }


    public function role($id){
        $role = \App\ACL\Role::find($id);
		$roles = \App\ACL\Role::all();
        $permissions = \App\ACL\Permission::all();

        return view('_wrath.role', compact('role','roles','permissions'));

    }

public function rolePermissionAttach(Request $request){
    if(999==999){ // input your acl or condition 
        
        //$user = Auth::user();
        //dd($request->role_id);
        $role = \App\ACL\Role::find($request->role_id);
        
        $permission_id = (int)$request->new_permission;

        // dd($role);
        
        $role->permissions()->attach($permission_id);
        // $user->roles()->detach($roleId);

        //$last_id = \App\Role::limit(1)->orderBy('role_id','desc')->value('role_id'); 
        //$role = \App\Role::create(['model_column'=>$request->input('input_html'),'model_column2'=>$request->input('input_html2'),]); 
        //$role = new Role; $role->name = $request->input('input_html'); $role->save(); //insertedId = $role->id; 
        \Session::flash('flash_message',[ 
            'msg'=>"Permission successfully stored!",  
            'class'=>"alert-success" 
        ]); 
        return redirect()->route('acl.role',$role->id); 
    }else{ 
        return redirect()->route('acl'); 
    } 

    }

    public function rolePermissionDettach(Request $request){
        
        if(999==999){ 
            
            //$user = Auth::user();
        $role = \App\ACL\Role::find($request->role_id);

        $permission_id = (int)$request->dettach_role;
        //dd($permission_id);
        $role->permissions()->detach($permission_id);

            \Session::flash('flash_message',[ 
                'msg'=>"Permission successfully deleted!",  
                'class'=>"alert-success" 
            ]); 
            return redirect()->route('acl.role',$role->id); 
        }else{ 
            return redirect()->route('acl'); 
        } 

    }



    public function permission($id){
		$permission = \App\User::Permission($id);
    }
    

    

}
