<?php

namespace App\Http\Controllers;

//20
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Administradora;
use App\Models\Clinica;
use App\Models\Consulta;
use App\Models\Convenio;
use App\Models\DespesaFinanceira;
use App\Models\Estoque;
use App\Models\Exame;
use App\Models\Medicamento;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Procedimento;
use App\Models\ProcedimentoMedico;
use App\Models\ProcedimentoTecnico;
use App\Models\ReceitaFinanceira;
use App\Models\Relatorio;
use App\Models\RelatorioFinanceiro;
use App\Models\Secretaria;
use App\Models\TecnicoSaude;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
