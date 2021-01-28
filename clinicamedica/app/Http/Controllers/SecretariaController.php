<?php

namespace App\Http\Controllers;

use App\Http\Requests\SecretariaRequest;
use App\Models\Secretaria;
use App\Models\Clinica;
class SecretariaController extends Controller
{
    private $objSecretaria;
    private $objClinica;

    public function __construct()
    {
        $this->objSecretaria=new Secretaria();
        $this->objClinica=new Clinica();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secretaria=$this->objSecretaria->all();
        return view('secretaria.index',compact('secretaria'));
        //dd($this->objSecretaria->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $secretarias=$this->objSecretaria->all();
        $clinica=$this->objClinica->all();
        return view('secretaria.create', compact('secretarias', 'clinica'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SecretariaRequest $request)
    {
        $cad=$this->objSecretaria->create([
            'sexo'=>$request->sexo,
            'cidade'=>$request->cidade,
            'email'=>$request->email,
            'complemento'=>$request->complemento,
            'cpf'=>$request->cpf,
            'rg'=>$request->rg,
            'nome'=>$request->nome,
            'longradouro'=>$request->longradouro,
            'contato'=>$request->contato,
            'bairro'=>$request->bairro,
            'uf'=>$request->uf,
            'cep'=>$request->cep,
            'datanascimento'=>$request->datanascimento,
            'foto'=>$request->foto,
            'salario'=>$request->salario,
            'fk_clinica'=>$request->fk_clinica
            
        ]);
        if($cad){
            return redirect('secretaria');
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
        $secretaria= $this->objSecretaria->find($id);
        return view('secretaria.show',compact('secretaria'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secretaria=$this->objSecretaria->find($id);
        $clinica=$this->objClinica->all();
        return view('secretaria.edit', compact('secretaria', 'clinica'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SecretariaRequest $request, $id)
    {
        $this->objSecretaria->where(['id'=>$id])->update([
            'sexo'=>$request->sexo,
            'cidade'=>$request->cidade,
            'email'=>$request->email,
            'complemento'=>$request->complemento,
            'cpf'=>$request->cpf,
            'rg'=>$request->rg,
            'nome'=>$request->nome,
            'longradouro'=>$request->longradouro,
            'contato'=>$request->contato,
            'bairro'=>$request->bairro,
            'uf'=>$request->uf,
            'cep'=>$request->cep,
            'datanascimento'=>$request->datanascimento,
            'foto'=>$request->foto,
            'salario'=>$request->salario,
            'fk_clinica'=>$request->fk_clinica,
            
        ]);
            return redirect('secretaria');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$secretaria = $this->objSecretaria->where('id',$id)->first()){
            return redirect()->back();  
          }
          $secretaria->delete();
          return redirect('secretaria');
       //dd("deletando a consulta $id");

    }
}
