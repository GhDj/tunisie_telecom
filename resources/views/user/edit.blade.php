<?php
/**
 * Created by PhpStorm.
 * User: ghdj
 * Date: 30/09/16
 * Time: 00:50
 */
?>

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Modifier Agent</div>
                    <div class="panel-body">

                        {{ Form::model($user,['method' => 'PATCH', 'action' => ['ClientController@update',$user->id]]) }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">
                                Nom et Prénom
                            </label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                        </div>
                        <div class="gorm-group">
                            <label for="email">
                                Email
                            </label>
                            <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                        </div>



                        <div class="form-group">
                            <input type="submit" value="Enregistrer" class="btn btn-primary">
                        </div>

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
