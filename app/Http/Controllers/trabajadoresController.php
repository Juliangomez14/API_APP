<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajador;

class trabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajadores = Trabajador::select('trabajadores.id','trabajadores.name','trabajadores.lastname','trabajadores.email','trabajadores.Telephone'
                                            ,'trabajadores.adress','estado_disponibilidades.status','trabajadores.created_at','trabajadores.updated_at')
                        ->join('estado_disponibilidades','estado_disponibilidades.id','=','trabajadores.id_estado_disponibilidades')
                        ->get();
        return $trabajadores; //Trabajador::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trabajadores = Trabajador::select('trabajadores.id','trabajadores.name','trabajadores.lastname','trabajadores.email','trabajadores.Telephone'
                                            ,'trabajadores.adress','estado_disponibilidades.status','trabajadores.created_at','trabajadores.updated_at')
                        ->join('estado_disponibilidades','estado_disponibilidades.id','=','trabajadores.id_estado_disponibilidades')
                        ->where('trabajadores.id', '=', $id)
                        ->get();
        return $trabajadores; //Trabajador::all();
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
