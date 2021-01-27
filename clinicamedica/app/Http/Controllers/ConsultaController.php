<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultaRequest;
use App\Models\Consulta;
use App\Models\Procedimento;
use App\Models\Medico;

class ConsultaController extends Controller
{
    private $objConsulta;
    private $objProcedimento;
    private $objMedico;
    public function __construct()
    {
        $this->objConsulta=new Consulta();
        $this->objProcedimento=new Procedimento();
        $this->objMedico=new Medico();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $consulta=$this->objConsulta->all();
        return view('consulta.index',compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consultas=$this->objConsulta->all();
        $procedimento=$this->objProcedimento->all();
        $medico=$this->objMedico->all();
        return view('consulta.create', compact('consultas', 'procedimento', 'medico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConsultaRequest $request)
    {
        $cad=$this->objConsulta->create([
            'hora'=>$request->hora,
            'data'=>$request->data,
            'status'=>$request->status,
            'valor'=>$request->valor,
            'fk_procedimento'=>$request->fk_procedimento,
            'fk_medico'=>$request->fk_medico,
            
        ]);
        if($cad){
            return redirect('consulta');
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
        $consulta=$this->objConsulta->find($id);
        return view('consulta.show',compact('consulta'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $consulta=$this->objConsulta->find($id);
        $procedimento=$this->objProcedimento->all();
        $medico=$this->objMedico->all();
        return view('consulta.edit', compact('consulta', 'procedimento', 'medico'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConsultaRequest $request, $id)
    {
        $this->objConsulta->where(['id'=>$id])->update([
            'hora'=>$request->hora,
            'data'=>$request->data,
            'status'=>$request->status,
            'valor'=>$request->valor,
            'fk_procedimento'=>$request->fk_procedimento,
            'fk_medico'=>$request->fk_medico,
            
        ]);
            return redirect('consulta');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$consulta = $this->objConsulta->where('id',$id)->first()){
            return redirect()->back();  
          }
          $consulta->delete();
          return redirect('consulta');
       //dd("deletando a consulta $id");
    }
}
