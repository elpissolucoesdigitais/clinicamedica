<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DespesasFinanceira;
use App\Models\Medico;
use App\Models\TecnicoSaude;
use App\Models\Clinica;
use App\Models\Secretaria;
use App\Models\Estoque;
class DespesaFinanceiraController extends Controller
{

    private $objDespesasFinanceira;
    private $objMedico;
    private $objTecnicoSaude;
    private $objClinica;
    private $objSecretaria;
    private $objEstoque;
    public function __construct()
    {
        $this->objDespesasFinanceira=new DespesasFinanceira();
        $this->objMedico=new Medico();
        $this->objTecnicoSaude=new TecnicoSaude();
        $this->objClinica=new Clinica();
        $this->objSecretaria=new Secretaria();
        $this->objEstoque=new Estoque();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd($this->objDespesasFinanceira->all());
        dd($this->objMedico->all());
        dd($this->objTecnicoSaude->all());
        dd($this->objClinica->all());
        dd($this->objSecretaria->all());
        dd($this->objEstoque->all());
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
