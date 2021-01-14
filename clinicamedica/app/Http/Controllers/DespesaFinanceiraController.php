<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DespesaFinanceira;
use App\Models\Medico;
use App\Models\TecnicoSaude;
use App\Models\Clinica;
use App\Models\Secretaria;
use App\Models\Estoque;
class DespesaFinanceiraController extends Controller
{

    private $objDespesaFinanceira;
    private $objMedico;
    private $objTecnicoSaude;
    private $objClinica;
    private $objSecretaria;
    private $objEstoque;
    public function __construct()
    {
        $this->objDespesaFinanceira=new DespesaFinanceira();
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
        $despesaFinanceira=$this->objDespesaFinanceira->all();
        return view('despesafinanceira.index',compact('despesaFinanceira'));
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
        $despesaFinanceira= $this->objDespesaFinanceira->find($id);
        return view('despesaFinanceira.show',compact('despesaFinanceira'));

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
