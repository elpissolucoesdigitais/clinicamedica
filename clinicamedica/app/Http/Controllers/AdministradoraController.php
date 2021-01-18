<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administradora;
class AdministradoraController extends Controller
{
    private $objAdministradora;

    public function __construct()
    {
        $this->objAdministradora=new Administradora();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administradora=$this->objAdministradora->all();
        return view('administradora.index',compact('administradora'));
        //dd($this->objAdministradora->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $administradora=$this->objAdministradora->all();
        return view('administradora.create', compact('administradora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objAdministradora->create([
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
            'salario'=>$request->salario
            //15
        ]);
        if($cad){
            return redirect('administradora');
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
        $administradora= $this->objAdministradora->find($id);
        return view('administradora.show',compact('administradora'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administradora=$this->objAdministradora->find($id);
        return view('administradora.create',compact('administradora'));

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
