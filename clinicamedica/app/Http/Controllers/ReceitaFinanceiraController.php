<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReceitaFinanceira;
use App\Models\Consulta;
use App\Models\Administradora;
class ReceitaFinanceiraController extends Controller
{
    private $objReceitaFinanceira;
    private $Consulta;
    private $Administradora;
    
    public function __construct()
    {    
        $this->objReceitaFinanceira = new ReceitaFinanceira();
        $this->objConsulta = new Consulta();
        $this->objAdministradora = new Administradora();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receitaFinanceira=$this->objReceitaFinanceira->all();
        return view('receitafinanceira.index',compact('receitaFinanceira'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $receitaFinanceira=$this->objReceitaFinanceira->all();
        $consulta=$this->objConsulta->all();
        $administradora=$this->objAdministradora->all();
        return view('receitafinanceira.create', compact('receitaFinanceira',
        'consulta', 'administradora'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objReceitaFinanceira->create([
            'fk_consulta'=>$request->fk_consulta,
            'fk_administradora'=>$request->fk_administradora
            
        ]);
        if($cad){
            return redirect('receitaFinanceira');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receitaFinanceira= $this->objReceitaFinanceira->find($id);
        return view('receitaFinanceira.show',compact('receitaFinanceira'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receitaFinanceira=$this->objReceitaFinanceira->find($id);
        $consulta=$this->objConsulta->all();
        $administradora=$this->objAdministradora->all();
        return view('receitafinanceira.create', compact('receitaFinanceira',
    'consulta', 'administradora'));

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
