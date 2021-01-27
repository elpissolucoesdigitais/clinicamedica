<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConvenioRequest;
use App\Models\Convenio;
class ConvenioController extends Controller
{

    private $objConvenio;

    public function __construct()
    {
        $this->objConvenio=new Convenio();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convenio=$this->objConvenio->all();
        return view('convenio.index',compact('convenio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $convenios=$this->objConvenio->all();
        return view('convenio.create', compact('convenios'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConvenioRequest $request)
    {
        $cad=$this->objConvenio->create([
            'status'=>$request->status,
            'email'=>$request->email,
            'nome'=>$request->nome,
            'contato'=>$request->contato,
            'descricao'=>$request->descricao,
            'validade'=>$request->validade,
            'cnpj'=>$request->cnpj,
            'valor'=>$request->valor,
            //8
        ]);
        if($cad){
            return redirect('convenio');
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
        $convenio= $this->objConvenio->find($id);
        return view('convenio.show',compact('convenio'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $convenio=$this->objConvenio->find($id);
        return view('convenio.edit', compact('convenio'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConvenioRequest $request, $id)
    {
        $this->objConvenio->where(['id'=>$id])->update([
            'status'=>$request->status,
            'email'=>$request->email,
            'nome'=>$request->nome,
            'contato'=>$request->contato,
            'descricao'=>$request->descricao,
            'validade'=>$request->validade,
            'cnpj'=>$request->cnpj,
            'valor'=>$request->valor,
            
        ]);
            return redirect('convenio');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$convenio = $this->objConvenio->where('id',$id)->first()){
            return redirect()->back();  
          }
          $convenio->delete();
          return redirect('convenio');
       //dd("deletando a consulta $id");

    }
}
