<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function store(Request $request)
    {
        $cad=$this->objProcedimento->create([
            'descricao'=>$request->descricao,
            'valor'=>$request->valor,
            'nome'=>$request->nome,
            'fk_secretaria'=>$request->fk_secretaria
            
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
