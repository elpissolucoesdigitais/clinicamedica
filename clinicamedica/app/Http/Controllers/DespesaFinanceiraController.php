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
        $despesaFinanceira=$this->objDespesaFinanceira->all();
        return view('despesaFinanceira.create', compact('despesaFinanceira'));

        $medico=$this->objMedico->all();
        return view('medico.create', compact('medico'));

        $tecnicoSaude=$this->objTecnicoSaude->all();
        return view('tecnicoSaude.create', compact('tecnicoSaude'));

        $clinica=$this->objClinica->all();
        return view('clinica.create', compact('clinica'));

        $secretaria=$this->objSecretaria->all();
        return view('secretaria.create', compact('secretaria'));

        $estoque=$this->objEstoque->all();
        return view('estoque.create', compact('estoque'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objDespesaFinanceira->create([
            'fk_medico'=>$request->fk_medico,
            'fk_tecnico_saude'=>$request->fk_tecnico_saude,
            'fk_clinica'=>$request->fk_clinica,
            'fk_secretaria'=>$request->fk_secretaria,
            'fk_estoque'=>$request->fk_estoque,
            'tipo'=>$request->tipo
            
        ]);
        if($cad){
            return redirect('despesaFinanceira');
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
