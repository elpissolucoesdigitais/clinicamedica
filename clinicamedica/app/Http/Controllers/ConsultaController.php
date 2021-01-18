<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $consulta=$this->objConsulta->all();
        $procedimento=$this->objProcedimento->all();
        $medico=$this->objMedico->all();
        return view('consulta.create', compact('consulta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objConsulta->create([
            'hora'=>$request->hora,
            'data'=>$request->data,
            'status'=>$request->status,
            'valor'=>$request->valor,
            'fk_procedimento'=>$request->fk_procedimento,
            'fk_medico'=>$request->fk_medico
            
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
        $consulta= $this->objConsulta->find($id);
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
