<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exame;
use App\Models\Paciente;
use App\Models\Consulta;
class ExameController extends Controller
{

    private $objExame;
    private $objPaciente;
    private $objConsulta;


    public function __construct()
    {
        $this->objExame=new Exame();
        $this->objPaciente=new Paciente();
        $this->objConsulta=new Consulta();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exame=$this->objExame->all();
        return view('exame.index',compact('exame'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exame=$this->objExame->all();
        return view('exame.create', compact('exame'));

        $paciente=$this->objPaciente->all();
        return view('paciente.create', compact('paciente'));

        $consulta=$this->objConsulta->all();
        return view('consulta.create', compact('consulta'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objExame->create([
            'descricao'=>$request->descricao,
            'nome'=>$request->nome,
            'fk_paciente'=>$request->fk_paciente,
            'fk_consulta'=>$request->fk_consulta
            
        ]);
        if($cad){
            return redirect('exame');
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
        $exame= $this->objExame->find($id);
        return view('exame.show',compact('exame'));

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
