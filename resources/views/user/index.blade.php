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
                    <div class="panel-heading">Liste des Agents</div>
                    <div class="panel-body">

                        <div class="container">
                            <a href="{{ route('user.create') }}" class="btn btn-success">Ajouter Agent</a>
                        </div>

                        <div class="container-fluid">

                        <table class="table table-responsive table-bordered">

                            <tr>
                                <th>ID</th>
                                <th>Nom Prénom</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>

                            @foreach($users as $client)

                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', ['id' => $client->id]) }}" class="btn btn-default">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>

                                        <form action="{{ route('user.destroy',['id' => $client->id]) }}" method="post" style="display: inline-block;">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="delete">
                                            <button type="submit" class="btn btn-warning">
                                                <span class="glyphicon glyphicon-ban-circle"></span>

                                            </button></td>
                                        </form>

                                </tr>


                            @endforeach
                        </table>

                        {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
