<?php
/**
 * Created by PhpStorm.
 * User: ghdj
 * Date: 30/09/16
 * Time: 00:50
 */
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Modifier Client</div>
                    <div class="panel-body">

                            {{ Form::model($client,['method' => 'PATCH', 'action' => ['ClientController@update',$client->id]]) }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="cin">
                                    CIN
                                </label>
                                <input type="number" name="cin" class="form-control" value="{{ $client->cin }}">
                            </div>
                            <div class="gorm-group">
                                <label for="nom">
                                    Nom
                                </label>
                                <input type="text" name="nom" class="form-control" value="{{ $client->nom }}">
                            </div>
                            <div class="form-group">
                                <label for="prenom">
                                    Prenom
                                </label>
                                <input type="text" name="prenom" class="form-control" value="{{ $client->prenom }}">
                            </div>
                            <div class="form-group">
                                <label for="adresse">
                                    Adresse
                                </label>
                                <input type="text" name="adresse" class="form-control" value="{{ $client->adresse }}">
                            </div>
                            <div class="form-group">
                                <label for="tel">
                                    Téléphone
                                </label>
                                <input type="number" name="tel" class="form-control" value="{{ $client->tel }}">
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
