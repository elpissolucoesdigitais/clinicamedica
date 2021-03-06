<?php

namespace App\Http\Controllers;

use App\Http\Requests\RelatorioPacienteRequest;
use App\Models\Relatorio;
use App\Models\Medicamento;
use App\Models\Medico;
use App\Models\TecnicoSaude;
use App\Models\Exame;
class RelatorioPacienteController extends Controller
{
    private $objRelatorio;
    private $objMedicamento;
    private $objMedico;
    private $objTecnicoSaude;
    private $objExame;

    public function __construct()
    {
        $this->objRelatorio=new Relatorio();
        $this->objMedicamento=new Medicamento();
        $this->objMedico=new Medico();
        $this->objTecnicoSaude=new TecnicoSaude();
        $this->objExame=new Exame();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relatorioPaciente=$this->objRelatorio->all();
        return view('relatoriopaciente.index',compact('relatorioPaciente'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relatorioPacientes=$this->objRelatorio->all();
        $medicamento=$this->objMedicamento->all();
        $medico=$this->objMedico->all();
        $tecnicoSaude=$this->objTecnicoSaude->all();
        $exame=$this->objExame->all();
        return view('relatoriopaciente.create', compact('relatorioPacientes',
        'medicamento', 'medico', 'tecnicoSaude', 'exame'));     

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RelatorioPacienteRequest $request)
    {
        $cad=$this->objRelatorio->create([
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'fk_medicamento'=>$request->fk_medicamento,
            'fk_medico'=>$request->fk_medico,
            'fk_tecnico_saude'=>$request->fk_tecnico_saude,
            'fk_exame'=>$request->fk_exame
            
        ]);
        if($cad){
            return redirect('relatoriopaciente');
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
        $relatorioPaciente= $this->objRelatorio->find($id);
        return view('relatoriopaciente.show',compact('relatorioPaciente'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relatorioPaciente=$this->objRelatorio->find($id);
        $medicamento=$this->objMedicamento->all();
        $medico=$this->objMedico->all();
        $tecnicoSaude=$this->objTecnicoSaude->all();
        $exame=$this->objExame->all();
        return view('relatoriopaciente.edit', compact('relatorioPaciente',
    'medicamento', 'medico', 'tecnicoSaude', 'exame')); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RelatorioPacienteRequest $request, $id)
    {
        $this->objRelatorio->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'fk_medicamento'=>$request->fk_medicamento,
            'fk_medico'=>$request->fk_medico,
            'fk_tecnico_saude'=>$request->fk_tecnico_saude,
            'fk_exame'=>$request->fk_exame
            
        ]);
            return redirect('relatoriopaciente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$relatorioPaciente = $this->objRelatorioPaciente->where('id',$id)->first()){
            return redirect()->back();  
          }
          $relatorioPaciente->delete();
          return redirect('relatoriopaciente');
       //dd("deletando a consulta $id");

    }
}
