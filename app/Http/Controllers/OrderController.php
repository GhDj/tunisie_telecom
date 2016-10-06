<?php

namespace App\Http\Controllers;

use App\Client;
use App\Materiel;
use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notif = Materiel::where('quantite','<','10')->get();
        $orders = Order::paginate(15);
        return view('order.index',['orders' => $orders,'notif'=>$notif]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notif = Materiel::where('quantite','<','10')->get();
        $clietns = Client::all();
        $mateteriels = Materiel::all();

        return view('order.create' ,[
                'clients'   =>  $clietns,
                'materiels' =>  $mateteriels,
                'notif'     => $notif
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notif = Materiel::where('quantite','<','10')->get();
        Order::create($request->all());
        $m = Materiel::where('designation',$request->materiel)->first();
        //dd($m);
        $q = $m->quantite;
        $q-=1;
        $m->update(['quantite'=>$q]);
        return redirect('order',['notif'=>$notif]);
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
        $notif = Materiel::where('quantite','<','10')->get();
        $order = Order::findOrfail($id);
        $clients = Client::all();
        $materiels = Materiel::all();

        return view('order.edit', [
            'order' =>  $order,
            'clients'   => $clients,
            'materiels' => $materiels,
            'notif'     => $notif
        ]);
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
        $notif = Materiel::where('quantite','<','10')->get();
        $order = Order::findOrFail($id);
        $order->update($request->all());
        //dd($request);
        return redirect('order',['notif'=>$notif]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
