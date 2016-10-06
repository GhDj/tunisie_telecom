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
                    <div class="panel-heading">Supprimer Client</div>
                    <div class="panel-body">

                        <form action="{{ route('client.delete') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="cin">
                                    CIN
                                </label>
                                <input type="number" name="cin" class="form-control">
                            </div>




                            <div class="form-group">
                                <input type="submit" value="Supprimer" class="btn btn-primary">
                            </div>

                        </form>

                        <h2>Liste des clients</h2>

                        <table class="table table-responsive table-striped">

                            <tr>
                                <th>ID</th>
                                <th>CIN</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Adresse</th>
                                <th>Téléphone</th>
                                <th>Modifier</th>

                            </tr>

                            @foreach($clients as $client)

                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->cin }}</td>
                                    <td>{{ $client->nom }}</td>
                                    <td>{{ $client->prenom }}</td>
                                    <td>{{ $client->adresse }}</td>
                                    <td>{{ $client->tel }}</td>
                                    <td>        <a href="{{ route('client.edit', ['id' => $client->id]) }}">
                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                        </a>
                                    </td>

                                </tr>


                            @endforeach
                        </table>

                        {{ $clients->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
