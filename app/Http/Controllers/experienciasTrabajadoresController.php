<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExperienciaTrabajador;

class experienciasTrabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ExperienciaTrabajadores = ExperienciaTrabajador::select(
                        'trabajadores.id','trabajadores.name','trabajadores.lastname','experiencias.nombre_empresa','experiencias.actividades_ejecutadas'
                        ,'experiencias.fecha_inicio_contrato','experiencias.fecha_fin_contrato','experiencias.created_at','experiencias.updated_at'
                        )
                        ->join('trabajadores','trabajadores.id','=','experiencia_trabajadores.trabajadores_id')
                        ->join('experiencias','experiencias.id','=','experiencia_trabajadores.experiencias_id')
                        ->get();
        return  $ExperienciaTrabajadores;//ExperienciaTrabajador::all();
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
