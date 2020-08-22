<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstudioTrabajador;
use App\Estudio;

class estudiosTrabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $EstudiosTrabajadores = Estudio::select('trabajadores.id', 'trabajadores.name', 'trabajadores.lastname', 'estudios.titulo_academico', 'estudios.universidad_institucion'
            ,'estudios.year_finalizacion', 'estudios.lugar', 'estudios.created_at', 'estudios.updated_at')
            ->join('estudios_trabajadores','estudios_trabajadores.estudios_id','estudios.id')
            ->join('perfiles_laborales','perfiles_laborales.id','estudios_trabajadores.perfiles_laborales_id')
            ->join('trabajadores','trabajadores.id','perfiles_laborales.trabajadores_id')
            ->get();

        return $EstudiosTrabajadores; //EstudioTrabajador::all();
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
    public function show($titulo)
    {
        $EstudiosTrabajadores = Estudio::select('estudios.id', 'trabajadores.id as id_trabajador', 'trabajadores.name', 'trabajadores.lastname', 'estudios.titulo_academico', 'estudios.universidad_institucion'
            ,'estudios.year_finalizacion', 'estudios.lugar', 'estudios.created_at', 'estudios.updated_at')
            ->join('estudios_trabajadores','estudios_trabajadores.estudios_id','estudios.id')
            ->join('perfiles_laborales','perfiles_laborales.id','estudios_trabajadores.perfiles_laborales_id')
            ->join('trabajadores','trabajadores.id','perfiles_laborales.trabajadores_id')
            ->where('estudios.titulo_academico', '=', $titulo)
            ->get();

        return $EstudiosTrabajadores; //EstudioTrabajador::all();
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
