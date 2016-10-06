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
                    <div class="panel-heading">Les orders de travail</div>
                    <div class="panel-body">




                        <table class="table table-responsive table-bordered">

                            <tr>
                                <th>Client</th>
                                <th>Adresse</th>
                                <th>Materiel</th>
                                <th>Date</th>
                                <th>Détails</th>
                                <th>Modifier</th>
                            </tr>

                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->client }}</td>
                                    <td>{{ $order->adresse }}</td>
                                    <td>{{ $order->materiel }}</td>
                                    <td>{{ $order->date }}</td>
                                    <td>{{ $order->details }}</td>
                                    <td><a href="{{ route('order.edit', ['id' => $order->id]) }}">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a></td>
                                </tr>
                            @endforeach
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
