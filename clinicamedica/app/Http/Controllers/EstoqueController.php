<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;
use App\Models\Administradora;
class EstoqueController extends Controller
{
    private $objEstoque;
    private $objAdministradora;

    public function __construct()
    {
        $this->objEstoque=new Estoque();
        $this->objAdministradora=new Administradora();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estoque=$this->objEstoque->all();
        return view('estoque.index',compact('estoque'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estoques=$this->objEstoque->all();
        $administradora=$this->objAdministradora->all();
        return view('estoque.create', compact('estoques', 'administradora'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objEstoque->create([
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'quantidade'=>$request->quantidade,
            'tipo'=>$request->tipo,
            'valor'=>$request->valor,
            'fk_administradora'=>$request->fk_administradora
            
        ]);
        if($cad){
            return redirect('estoque');
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
        $estoque= $this->objEstoque->find($id);
        return view('estoque.show',compact('estoque'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estoque=$this->objEstoque->find($id);
        $administradora=$this->objAdministradora->all();
        return view('estoque.create', compact('estoque', 'administradora'));

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
        $this->objEstoque->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'quantidade'=>$request->quantidade,
            'tipo'=>$request->tipo,
            'valor'=>$request->valor,
            'fk_administradora'=>$request->fk_administradora
            
        ]);
            return redirect('estoque');

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
