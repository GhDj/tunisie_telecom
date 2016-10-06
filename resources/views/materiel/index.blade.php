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
                    <div class="panel-heading">Ajouter Matériel</div>
                    <div class="panel-body">

                        <form action="{{ route('materiel.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="designation">
                                    Désignation
                                </label>
                                <input type="text" name="designation" class="form-control">
                            </div>
                            <div class="gorm-group">
                                <label for="categorie">
                                    Catégorie
                                </label>
                                <input type="text" name="categorie" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantite">
                                    Quantité
                                </label>
                                <input type="text" name="quantite" class="form-control">
                            </div>


                            <div class="form-group">
                                <input type="submit" value="Ajouter" class="btn btn-primary">
                                <input type="reset" value="Annuler" class="btn btn-warning">
                            </div>

                        </form>

                        <h2 class="title">Liste des matériels</h2>

                        <table class="table table-responsive table-bordered">

                            <tr>
                                <th>Désignation</th>
                                <th>Catégorie</th>
                                <th>Quantité</th>
                                <th>Modifier</th>
                            </tr>

                            @foreach($materiels as $materiel)
                                <tr>
                                    <td>{{ $materiel->designation }}</td>
                                    <td>{{ $materiel->categorie }}</td>
                                    <td>{{ $materiel->quantite }}</td>
                                    <td><a href="{{ route('materiel.edit',['id'=>$materiel->id]) }}">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a></td>

                            @endforeach
                        </table>

                        {{ $materiels->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
