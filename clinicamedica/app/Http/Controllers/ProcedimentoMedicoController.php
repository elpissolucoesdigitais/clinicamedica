<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProcedimentoMedico;
use App\Models\Medico;
use App\Models\Procedimento;

class ProcedimentoMedicoController extends Controller
{
    private $objProcedimento;
    private $objMedico;
    private $ProcedimentoMedico;

    public function __construct()
    {
        $this->objMedico=new Medico();
        $this->objProcedimento=new Procedimento();
        $this->objProcedimentoMedico=new ProcedimentoMedico();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedimentoMedico=$this->objProcedimentoMedico->all();
        return view('procedimentomedico.index',compact('procedimentoMedico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $procedimento=$this->objProcedimento->all();
        $medico=$this->objMedico->all();
        $procedimentoMedico=$this->objProcedimentoMedico->all();
        return view('procedimentomedico.create', compact('procedimentoMedico',
        'procedimento', 'medico'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objProcedimentoMedico->create([
            'fk_procedimento'=>$request->fk_procedimento,
            'fk_medico'=>$request->fk_medico
            
        ]);
        if($cad){
            return redirect('procedimentomedico');
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
        $procedimentoMedico= $this->objProcedimentoMedico->find($id);
        return view('procedimentoMedico.show',compact('procedimentoMedico'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procedimento=$this->objProcedimento->all();
        $medico=$this->objMedico->all();
        $procedimentoMedico=$this->objProcedimentoMedico->find($id);
        return view('procedimentomedico.create', compact('procedimentoMedico',
    'procedimento', 'medico'));

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
        $this->objProcedimentoMedico->where(['id'=>$id])->update([
            'fk_procedimento'=>$request->fk_procedimento,
            'fk_medico'=>$request->fk_medico,
            
        ]);
            return redirect('procedimentomedico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$procedimentoMedico = $this->objProcedimentoMedico->where('id',$id)->first()){
            return redirect()->back();  
          }
          $procedimentoMedico->delete();
          return redirect('procedimentomedico');
       //dd("deletando a consulta $id");

    }
}
