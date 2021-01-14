<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RelatorioFinanceiro;
use App\Models\DespesaFinanceira;
use App\Models\Administradora;
class RelatorioFinanceiroController extends Controller
{
    private $objRelatorioFinanceiro;
    private $DespesaFinanceira;
    private $Administradora;
    
    public function __construct()
    {    
        $this->objRelatorioFinanceiro = new RelatorioFinanceiro();
        $this->objDespesaFinanceira = new DespesaFinanceira();
        $this->objAdministradora = new Administradora();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relatorioFinanceiro=$this->objRelatorioFinanceiro->all();
        return view('relatoriofinanceiro.index',compact('relatorioFinanceiro'));
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
        $relatorioFinanceiro= $this->objRelatorioFinanceiro->find($id);
        return view('relatorioFinanceiro.show',compact('relatorioFinanceiro'));

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
