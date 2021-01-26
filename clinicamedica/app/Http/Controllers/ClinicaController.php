<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClinicaRequest;
use App\Models\Clinica;
class ClinicaController extends Controller
{
    private $objClinica;

    public function __construct()
    {
        $this->objClinica=new Clinica();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinica=$this->objClinica->all();
        return view('clinica.index',compact('clinica'));
        //dd($this->objClinica->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clinicas=$this->objClinica->all();
        return view('clinica.create', compact('clinicas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClinicaRequest $request)
    {
        $cad=$this->objClinica->create([
            'responsaveltecnico'=>$request->responsaveltecnico,
            'numero'=>$request->numero,
            'cidade'=>$request->cidade,
            'email'=>$request->email,
            'complemento'=>$request->complemento,
            'nome'=>$request->nome,
            'logradouro'=>$request->longradouro,
            'contato'=>$request->contato,
            'bairro'=>$request->bairro,
            'uf'=>$request->uf,
            'cep'=>$request->cep,
            'foto'=>$request->foto,
            'cnpj'=>$request->cnpj
            //13
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
        $clinica= $this->objClinica->find($id);
        return view('clinica.show',compact('clinica'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clinica=$this->objClinica->find($id);
        return view('clinica.create', compact('clinica'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClinicaRequest $request, $id)
    {
        $this->objClinica->where(['id'=>$id])->update([
            'responsaveltecnico'=>$request->responsaveltecnico,
            'numero'=>$request->numero,
            'cidade'=>$request->cidade,
            'email'=>$request->email,
            'complemento'=>$request->complemento,
            'nome'=>$request->nome,
            'logradouro'=>$request->longradouro,
            'contato'=>$request->contato,
            'bairro'=>$request->bairro,
            'uf'=>$request->uf,
            'cep'=>$request->cep,
            'foto'=>$request->foto,
            'cnpj'=>$request->cnpj
            
        ]);
            return redirect('clinica');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$clinica = $this->objClinica->where('id',$id)->first()){
            return redirect()->back();  
          }
          $clinica->delete();
          return redirect('clinica');
       //dd("deletando a consulta $id");

    }
}
