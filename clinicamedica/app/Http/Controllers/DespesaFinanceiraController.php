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
        $despesaFinanceiras=$this->objDespesaFinanceira->all();
        $medico=$this->objMedico->all();
        $tecnicoSaude=$this->objTecnicoSaude->all();
        $clinica=$this->objClinica->all();
        $secretaria=$this->objSecretaria->all();
        $estoque=$this->objEstoque->all();
        return view('despesafinanceira.create', compact('despesaFinanceiras', 'medico',
        'tecnicoSaude', 'clinica', 'secretaria', 'estoque'));

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
            return redirect('despesafinanceira');
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
        return view('despesafinanceira.show',compact('despesaFinanceira'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $despesaFinanceira=$this->objDespesaFinanceira->find($id);
        $medico=$this->objMedico->all();
        $tecnicoSaude=$this->objTecnicoSaude->all();
        $clinica=$this->objClinica->all();
        $secretaria=$this->objSecretaria->all();
        $estoque=$this->objEstoque->all();
        return view('despesafinanceira.create', compact('despesaFinanceira', 'medico',
    'tecnicoSaude', 'clinica', 'secretaria', 'estoque'));

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
        $this->objDespesaFinanceira->where(['id'=>$id])->update([
            'fk_medico'=>$request->fk_medico,
            'fk_tecnico_saude'=>$request->fk_tecnico_saude,
            'fk_clinica'=>$request->fk_clinica,
            'fk_secretaria'=>$request->fk_secretaria,
            'fk_estoque'=>$request->fk_estoque,
            'tipo'=>$request->tipo
            
        ]);
            return redirect('despesafinanceira');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$despesaFinanceira = $this->objDespesaFinanceira->where('id',$id)->first()){
            return redirect()->back();  
          }
          $despesaFinanceira->delete();
          return redirect('despesafinanceira');
       //dd("deletando a consulta $id");

    }
}
