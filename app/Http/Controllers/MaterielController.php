<?php

namespace App\Http\Controllers;

use App\Materiel;
use Illuminate\Http\Request;

use App\Http\Requests;

class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notif = Materiel::where('quantite','<','10')->get();

        $materiels = Materiel::paginate(15);
        return view('materiel.index',
            ['materiels' => $materiels,
                'notif' => $notif
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notif = Materiel::where('quantite','<','10')->get();
        return view('materiel.create',['notif',$notif]);
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
        Materiel::create($request->all());
        return redirect('materiel',['notif',$notif]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $materiel = Materiel::findOrFail($id);
        $materiels = Materiel::paginate(15);
        return view('materiel.edit',['materiel'=>$materiel,
        'materiels' => $materiels,
        'notif' => $notif
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
        $materiel = Materiel::findOrFail($id);
        $materiel->update($request->all());
        return redirect('materiel',['notif'=>$notif]);
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
