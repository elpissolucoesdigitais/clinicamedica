<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TecnicoSaude;

class TecnicoSaudeController extends Controller
{
    private $objTecnicoSaude;

    public function __construct()
    {
        $this->objTecnicoSaude=new TecnicoSaude();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnicoSaude=$this->objTecnicoSaude->all();
        return view('tecnicosaude.index',compact('tecnicoSaude'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tecnicoSaudes=$this->objTecnicoSaude->all();
        return view('tecnicosaude.create',compact('tecnicoSaudes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objTecnicoSaude->create([
            'cpf'=>$request->cpf,
            'uf'=>$request->uf,
            'longradouro'=>$request->longradouro,
            'bairro'=>$request->bairro,
            'salario'=>$request->salario,
            'cidade'=>$request->cidade,
            'especialidade'=>$request->especialidade,
            'cep'=>$request->cep,
            'contato'=>$request->contato,
            'email'=>$request->email,
            'complemento'=>$request->complemento,
            'nome'=>$request->nome,
            'rg'=>$request->rg,
            'foto'=>$request->foto,   
        ]);
        if($cad){
            return redirect('tecnicosaude');
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
        $tecnicoSaude= $this->objTecnicoSaude->find($id);
        return view('tecnicoSaude.show',compact('tecnicoSaude'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tecnicoSaude=$this->objTecnicoSaude->find($id);
        return view('tecnicosaude.create',compact('tecnicoSaude'));

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
        $this->objTecnicoSaude->where(['id'=>$id])->update([
            'cpf'=>$request->nome,
            'uf'=>$request->logradouro,
            'longradouro'=>$request->longradouro,
            'bairro'=>$request->bairro,
            'salario'=>$request->salario,
            'cidade'=>$request->cidade,
            'especialidade'=>$request->especialidade,
            'cep'=>$request->cep,
            'contato'=>$request->contato,
            'email'=>$request->email,
            'complemento'=>$request->complemento,
            'nome'=>$request->nome,
            'rg'=>$request->rg,
            'foto'=>$request->foto,
            
            
        ]);
          return redirect('tecnicosaude');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$tecnicoSaude = $this->objTecnicoSaude->where('id',$id)->first()){
            return redirect()->back();  
          }
          $tecnicoSaude->delete();
          return redirect('tecnicosaude');
       //dd("deletando a consulta $id");

    }
}
