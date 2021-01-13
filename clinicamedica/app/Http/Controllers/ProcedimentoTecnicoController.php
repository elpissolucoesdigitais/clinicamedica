<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TecnicoSaude;
use App\Models\Procedimento;
use App\Models\ProcedimentoTecnico;

class ProcedimentoTecnicoController extends Controller
{
    private $objTecnicoSaude;
    private $Procedimento;
    private $ProcedimentoMedico;
    
    public function __construct()
    {    
        $this->objTecnicoSaude = new TecnicoSaude();
        $this->objProcedimento = new Procedimento();
        $this->objProcedimentoMedico = new ProcedimentoMedico();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd($this->objTecnicoSaude->all());
        dd($this->objProcedimento->all());
        dd($this->objProcedimentoMedico->all());
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
