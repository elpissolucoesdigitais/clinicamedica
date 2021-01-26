<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcedimentoRequest;
use App\Models\Procedimento;
use App\Models\Secretaria;

class ProcedimentoController extends Controller
{
    private $objProcedimento;
    private $objSecretaria;

    public function __construct()
    {
        $this->objProcedimento=new Procedimento();
        $this->objSecretaria=new Secretaria();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedimento=$this->objProcedimento->all();
        return view('procedimento.index',compact('procedimento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $procedimentos=$this->objProcedimento->all();
        $secretaria=$this->objSecretaria->all();
        return view('procedimento.create', compact('procedimentos','secretaria'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProcedimentoRequest $request)
    {
        $cad=$this->objProcedimento->create([
            'descricao'=>$request->descricao,
            'valor'=>$request->valor,
            'nome'=>$request->nome,
            'fk_secretaria'=>$request->fk_secretaria,
            
        ]);
        if($cad){
            return redirect('procedimento');
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
        $procedimento= $this->objProcedimento->find($id);
        return view('procedimento.show',compact('procedimento'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procedimento=$this->objProcedimento->find($id);
        $secretaria=$this->objSecretaria->all();
        return view('procedimento.create',compact('secretaria','procedimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProcedimentoRequest $request, $id)
    {
        $this->objProcedimento->where(['id'=>$id])->update([
            'descricao'=>$request->descricao,
            'valor'=>$request->valor,
            'nome'=>$request->nome,
            'fk_secretaria'=>$request->fk_secretaria,
            
        ]);
            return redirect('procedimento');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$procedimento = $this->objProcedimento->where('id',$id)->first()){
            return redirect()->back();  
          }
          $procedimento->delete();
          return redirect('procedimento');
       //dd("deletando a consulta $id");

    }
}
