<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use App\Models\Equipos_ciudades;
use App\Models\Locales;
use App\Models\Num_jugadores;
use Illuminate\Http\Request;

class Equipo_ciudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $equipos=Equipos_ciudades::all();
        $locales=Locales::paginate(2);
        $date=Equipos::paginate(5);
        $date_jugadores=Num_jugadores::paginate(5);
        return view('futbol.show',compact('equipos','locales','date','date_jugadores'));
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
        //
        $datosLocales=request()->except('_token');
        Locales::insert($datosLocales);

        //return response()->json($datosLocales);
        return redirect('futbol');
    }

    public function store_dos(Request $request)
    {
        //
        $datosEquipo=new Equipos();
        $datosEquipo->name=$request->name;
        $datosEquipo->name_equipo=$request->name_equipo;
        $datosEquipo->edad=$request->edad;
        $datosEquipo->sueldo=$request->sueldo;
        $datosEquipo->tr=$request->tr ?? 0;
        $datosEquipo->ta=$request->ta ?? 0;
        $datosEquipo->pj=$request->pj ?? 0;

        $datosEquipo->save();

        // $datosEquipo=request()->except('_token');
        // Equipos::insert($datosEquipo);
        // return response()->json($datosEquipo);
        return redirect('futbol');
    }

    public function store_tres(Request $request)
    {
        $datosNum_jugadores=request()->except('_token');
        Num_jugadores::insert($datosNum_jugadores);
        //return response()->json($datosNum_jugadores);
        return redirect('futbol');
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
        //
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
        //
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
