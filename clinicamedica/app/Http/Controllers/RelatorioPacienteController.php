<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $relatorioPaciente= $this->objRelatorio->find($id);
        return view('relatorioPaciente.show',compact('relatorioPaciente'));

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
