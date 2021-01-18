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
        $procedimentoMedico=$this->objProcedimentoMedico->all();
        return view('procedimentoMedico.create', compact('procedimentoMedico'));

        $medico=$this->objMedico->all();
        return view('medico.create', compact('medico'));

        $procedimento=$this->objProcedimento->all();
        return view('procedimento.create', compact('procedimento'));

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
            return redirect('procedimentoMedico');
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
