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
                    <div class="panel-heading">Créer Order de travail</div>
                    <div class="panel-body">

                        <form action="{{ route('order.update',['id'=>$order->id]) }}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="client">
                                    Client
                                </label>
                                <select name="client" id="" class="form-control">
                                    <option value="{{ $order->client }}" selected>{{ $order->client }}</option>
                                    @foreach($clients as $client)

                                        <option value="{{ $client->nom }}{{ $client->prenom }}">
                                            {{ $client->nom }} {{ $client->prenom }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="gorm-group">
                                <label for="adresse">
                                    Adresse
                                </label>
                                <input type="text" name="adresse" class="form-control" value="{{ $order->adresse }}">
                            </div>
                            <div class="form-group">
                                <label for="materiel">
                                    Materiel
                                </label>
                                <select name="materiel" id="" class="form-control">
                                    <option value="{{ $order->materiel }}" selected>{{ $order->materiel }}</option>
                                    @foreach($materiels as $materiel)
                                        <option value="{{ $materiel->designation }}">
                                            {{ $materiel->designation }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">
                                    Date
                                </label>
                                <input type="date" name="date" class="form-control" value="{{ $order->date }}">
                            </div>
                            <div class="form-group">
                                <label for="details">
                                    Détails
                                </label>
                                <input type="text" name="details" class="form-control" value="{{ $order->details }}">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Enregister" class="btn btn-primary">
                            </div>

                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
