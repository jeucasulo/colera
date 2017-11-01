@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <!-- <div class="col-md-8 col-md-offset-2"> -->
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">


                <div class="row">
                    <div class="col-xs-2"><h5><b>Users</b></h5></div>
                    <div class="col-xs-3"><h5><b>Roles</b></h5></div>
                    <div class="col-xs-7"><h5><b>Permissions</b></h5></div>
                </div><hr>

                <div class="row">
                    <div class="col-xs-2">
                        <p><span class="label label-info">{{$user->id}}</span> {{$user->name}}</p>
                        <p>{{$user->email}}</p>
                    </div>

                    <div class="col-xs-3">      
                        @foreach($user->roles as $role)
                        <p>
                            <span class="label label-info">{{$role->id}}</span> <span id="inner{{$role->id}}" class="role_label">{{$role->label}}</span> <span class="label label-success">{{$role->name}}</span>
                                   <!--  @foreach($role->permissions as $permission)
                                        ({{$permission->name}} {{$permission->id}})
                                        @endforeach -->
                                    </p>

                                    @endforeach
                                </div>

                                <div class="col-xs-7">
                                    @foreach($user->roles as $role)
                                    <p>
                                        @foreach($role->permissions as $permission)
                                        <span class="label label-warning permissions new_role_label new_role_label{{$role->id}}"> {{$permission->name}}/{{$permission->id}}  &nbsp</span>
                                        @endforeach
                                    </p>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



    </div>
    





    <div class="container">
            <div class="row">
                <!-- <div class="col-md-8 col-md-offset-2"> -->
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <form id='saveForm' class='form-horizontal' role='form' method='POST' action='{{route("acl.user-role-attach")}}' enctype='multipart/form-data'> 
                              {{ csrf_field() }} 
                              <input type="text" class="form-control" id="user_id" name="user_id" value="{{$user->id}}" style="display: none">
                              <select name="new_role" id="new_role" class="form-control">
                                @foreach($roles as $role)
                                    <option name="" id="out{{$role->id}}" value="{{$role->id}}">{{$role->label}}</option>
                                @endforeach
                            </select>        

                            <button href="{{route('acl.user-role-attach')}}" class="btn btn-default">Attach role</button>
                            <!-- <button class='btn btn-info'>Adicionar</button>  -->
                        </form>            
                        <br>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <form id='detachRole' class='form-horizontal' role='form' method='POST' action='{{route("acl.user-role-dettach")}}' enctype='multipart/form-data'> 
                              {{ csrf_field() }} 
                              <input type="text" class="form-control" id="user_id" name="user_id" value="{{$user->id}}" style="display: none">
                              <select name="dettach_role" id="dettach_role" class="form-control">
                                @foreach($user->roles as $role)
                                    <option name="" id="out_dettach{{$role->id}}" value="{{$role->id}}">{{$role->label}}</option>
                                @endforeach
                            </select>        

                            <button href="{{route('acl.user-role-dettach')}}" class="btn btn-default">Dettach role</button>
                            <!-- <button class='btn btn-info'>Adicionar</button>  -->
                        </form>            
                        <br>

                        </div>
                    </div>
                </div>

        </div>

    </div>



    <div class="container">
        <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-xs-2">
                

                        @foreach($roles as $role)
                            <p><span class="label label-success">{{$role->name}}</span></p><hr>
                        @endforeach

                        </div>

                        <div class="col-xs-10">
                        @foreach($roles as $role)
                        
                            @foreach($role->permissions as $permission)
                                            <span class="label label-warning">{{$permission->name}}</span>
                            @endforeach
                        <hr>
                        @endforeach
                        
            
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    


    @endsection


    <style>
        .permissions{
            font-size: 10px !important;
        }
    </style>
    <script src="/colera-asset/js/jquery-3.1.1.min.js"></script>

    <script>
        $(document).ready(function(){
            
            removeEqualRoles();
        //check for roles that user allready have and erase it from option
        function removeEqualRoles(){
            for(i = 0; i < 50; i++){
                var inner = $("#inner"+i+"").html();
                var out = $("#out"+i+"").html();
                if(inner != null){
                    if(inner = out){
                        $("#out"+i+"").remove();
                    }
                }
            }
        }    
    // $("#add").click(function(){
    //     //alert($("#new_roles").val()); output 2 3 4
    //     //alert($("#new_roles option:selected").text()); //output role label
    // });


});
</script>