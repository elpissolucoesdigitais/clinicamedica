<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TecnicoSaude;
use App\Models\Procedimento;
use App\Models\ProcedimentoTecnico;

class ProcedimentoTecnicoController extends Controller
{
    private $objTecnicoSaude;
    private $Procedimento;
    private $ProcedimentoTecnico;
    
    public function __construct()
    {    
        $this->objTecnicoSaude = new TecnicoSaude();
        $this->objProcedimento = new Procedimento();
        $this->objProcedimentoTecnico = new ProcedimentoTecnico();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedimentoTecnico=$this->objProcedimentoTecnico->all();
        return view('procedimentotecnico.index',compact('procedimentoTecnico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tecnicoSaude=$this->objTecnicoSaude->all();
        return view('tecnicoSaude.create', compact('tecnicoSaude'));

        $procedimento=$this->objProcedimento->all();
        return view('procedimento.create', compact('procedimento'));

        $procedimentoTecnico=$this->objProcedimentoTecnico->all();
        return view('procedimentoTecnico.create', compact('procedimentoTecnico'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objProcedimentoTecnico->create([
            'fk_tecnico_saude'=>$request->fk_tecnico_saude,
            'fk_procedimento'=>$request->fk_procedimento
            
        ]);
        if($cad){
            return redirect('procedimentoTecnico');
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
        
        $procedimentotecnico= $this->objProcedimentoTecnico->find($id);
        return view('procedimentotecnico.show',compact('procedimentotecnico'));
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
