@extends('layouts.app')

@section('content')

<?php 
// this code block reads the line 1 of this file
// $myFile = "../resources/views/wrath/test.txt";
// 
// $fh = fopen($myFile, 'r');
// $theData = fgets($fh);
// fclose($fh);
// 
// $lines = file($myFile);//file in to an array
// echo $lines[1]; //line 1
// echo $lines[2]; //line 2
?>

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
                    @forelse($users as $user)
                        <div class="row">
                        <div class="col-xs-2">
                            <p><span class="label label-info">{{$user->id}}</span> <a href="{{route('acl.user', $user->id)}}">{{$user->name}} </a></p>
                            <p>{{$user->email}}</p>
                        </div>




                        <div class="col-xs-3">
                            @forelse($user->roles as $role)
                                <p>
                                    <span class="label label-info">{{$role->id}}</span> <a href="{{route('acl.role', $role->id)}}">{{$role->label}}</a> <span class="label label-success">{{$role->name}}</span>
                                   <!--  @foreach($role->permissions as $permission)
                                        ({{$permission->name}} {{$permission->id}})
                                    @endforeach -->
                                </p>

                            @empty
                            <p>nothing...</p>
                            @endforelse

                        </div>

                        <div class="col-xs-7">
                            @forelse($user->roles as $role)
                                <p>
                                    @foreach($role->permissions as $permission)
                                     <span class="label label-warning permissions"> {{$permission->name}}/{{$permission->id}}  &nbsp</span>
                                    @endforeach
                                </p>
                            @empty
                            <p>nothing...</p>
                            @endforelse
                        </div>

                        </div>
                        <hr>
                    @empty
                        <p>Nothing found...</p>
                    @endforelse
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