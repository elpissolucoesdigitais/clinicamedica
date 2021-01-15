<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;

class MedicoController extends Controller
{
    private $objMedico;

    public function __construct()
    {
        $this->objMedico=new Medico();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medico=$this->objMedico->all();
        return view('medico.index',compact('medico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medico=$this->objMedico->all();
        return view('medico.index',compact('medico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objMedico->create([
            'sexo'=>$request->sexo,
            'cidade'=>$request->cidade,
            'email'=>$request->email,
            'bairro'=>$request->bairro,
            'salario'=>$request->salario,
            'complemento'=>$request->especialidade,
            'cep'=>$request->cep,
            'contato'=>$request->contato,
            'email'=>$request->email,
            'foto'=>$request->foto,
            'nome'=>$request->nome,
            'rg'=>$request->rg,
            'cpf'=>$request->cpf,
            'longradouro'=>$request->longradouro,
            'uf	'=>$request->uf	,
            'datanascimento'=>$request->datanascimento,
            'crm'=>$request->crm,
            'crmuf'=>$request->crmuf,
            'especialidade'=>$request->especialidade,
            
            
            
        ]);
        if($cad){
            return redirect('clinica');
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
        $medico= $this->objMedico->find($id);
        return view('medico.show',compact('medico'));

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
