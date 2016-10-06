<?php

namespace App\Http\Controllers;

use App\Client;
use App\Materiel;
use Illuminate\Http\Request;

use App\Http\Requests;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate(10);
        return view('client.index', ['clients' => $clients, 'notif'=>$notif = Materiel::where('quantite','<','10')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Client::create($request->all());
        return redirect('client', [ 'notif'=>$notif = Materiel::where('quantite','<','10')->get()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('client.edit', ['client' => $client, 'notif'=>$notif = Materiel::where('quantite','<','10')->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request->all());
        return redirect('client',[ 'notif'=>$notif = Materiel::where('quantite','<','10')->get()]);
    }

    public function supprimer()
    {
        $clients = Client::paginate(15);
        return view('client.destroy',['clients'=>$clients, 'notif'=>$notif = Materiel::where('quantite','<','10')->get()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dd($request->all());
    }

    public function delete(Request $request)
    {
        //dd($request->all());
        $c = Client::where('cin',$request->cin)->first();
        //dd($c->id);
        Client::destroy($c->id);
        return redirect('client',[ 'notif'=>$notif = Materiel::where('quantite','<','10')->get()]);
    }
}
