@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <!-- <div class="col-md-8 col-md-offset-2"> -->
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">


                <div class="row">
                    <div class="col-xs-3"><h5><b>Role</b></h5></div>
                    <div class="col-xs-9"><h5><b>Permissions</b></h5></div>
                </div><hr>

                <div class="row">
                    <div class="col-xs-3">
                        <p>
                            <span class="label label-info">{{$role->id}}</span> <span class="role_label">{{$role->label}}</span> <span class="label label-success">{{$role->name}}</span>
                        </p>
                    </div>  

                    <div class="col-xs-9">
                        @forelse($role->permissions as $permission)
                        <p>
                            <span id="inner{{$permission->id}}" class="label label-warning permissions new_role_label new_role_label{{$role->id}}"> {{$permission->label}}/{{$permission->id}}  &nbsp</span>
                        </p>
                        @empty
                            fudeu
                        @endforelse


                    </div>
                </div>
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

                        <div class="row">
                            <div class="col-xs-3"><h5><b>Users</b></h5></div>
                        </div><hr>

                            <div class="col-xs-2">

                                @foreach($role->users as $user)
                                <p>
                                    <span class="label label-warning permissions new_role_label new_role_label{{$role->id}}"> {{$user->name}}/{{$user->id}}  &nbsp</span>
                                </p>
                                @endforeach



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
                          <form id='saveForm' class='form-horizontal' role='form' method='POST' action='{{route("acl.role-permission-attach")}}' enctype='multipart/form-data'> 
                              {{ csrf_field() }} 
                              <input type="text" class="form-control" id="role_id" name="role_id" value="{{$role->id}}" style="display: none">
                                  <select name="new_permission" id="new_permission" class="form-control">
                                      @foreach($permissions as $permission)
                                        <option id="out{{$permission->id}}" value="{{$permission->id}}">{{$permission->label}}</option>
                                      @endforeach



                                  </select>        

                              <button href="{{route('acl.role-permission-attach')}}" class="btn btn-default">Attach role</button>
                              <!-- <button class='btn btn-info'>Adicionar</button>  -->
                          </form>            
                          <br>

                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <form id='detachRole' class='form-horizontal' role='form' method='POST' action='{{route("acl.role-permission-dettach")}}' enctype='multipart/form-data'> 
                          {{ csrf_field() }} 
                          <input type="text" class="form-control" id="role_id" name="role_id" value="{{$role->id}}" style="display: none">
                              <select name="dettach_role" id="dettach_role" class="form-control">
                                  @foreach($role->permissions as $permission)
                                    <option id="out_dettach{{$permission->id}}" value="{{$permission->id}}">{{$permission->label}}</option>
                                  @endforeach
                              </select>        

                          <button href="{{route('acl.role-permission-dettach')}}" class="btn btn-default">Dettach role</button>
                          <!-- <button class='btn btn-info'>Adicionar</button>  -->
                      </form>            
                      <br>

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