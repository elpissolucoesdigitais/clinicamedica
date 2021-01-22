<?php

namespace App\Http\Controllers;

//19
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Administradora;
use App\Models\Clinica;
use App\Models\Consulta;
use App\Models\Convenio;
use App\Models\DespesaFinanceira;
use App\Models\Estoque;
use App\Models\Exame;
use App\Models\Medicamento;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Procedimento;
use App\Models\ProcedimentoMedico;
use App\Models\ProcedimentoTecnico;
use App\Models\ReceitaFinanceira;
use App\Models\Relatorio;
use App\Models\RelatorioFinanceiro;
use App\Models\Secretaria;
use App\Models\TecnicoSaude;

class AdminController extends Controller
{
    private $objAdmin;
    private $objAdministradora;
    private $objClinica;
    private $objConsulta;
    private $objConvenio;
    private $objDespesaFinanceira;
    private $objEstoque;
    private $objExame;
    private $objMedicamento;
    private $objMedico;
    private $objPaciente;
    private $objProcedimento;
    private $objProcedimentoMedico;
    private $objProcedimentoTecnico;
    private $objReceitaFinanceira;
    private $objRelatorio;
    private $objRelatorioFinanceiro;
    private $objSecretaria;
    private $objTecnicoSaude;

    public function __construct()
    {
        $this->objAdmin=new Admin();
        $this->objAdministradora=new Administradora();
        $this->objClinica=new Clinica();
        $this->objConsulta=new Consulta();
        $this->objConvenio=new Convenio();
        $this->objDespesaFinanceira=new DespesaFinanceira();
        $this->objEstoque=new Estoque();
        $this->objExame=new Exame();
        $this->objMedicamento=new Medicamento();
        $this->objMedico=new Medico();
        $this->objPaciente=new Paciente();
        $this->objProcedimento=new Procedimento();
        $this->objProcedimentoMedico=new ProcedimentoMedico();
        $this->objProcedimentoTecnico=new ProcedimentoTecnico();
        $this->objReceitaFinanceira=new ReceitaFinanceira();
        $this->objRelatorio=new Relatorio();
        $this->objRelatorioFinanceiro=new RelatorioFinanceiro();
        $this->objSecretaria=new Secretaria();
        $this->objTecnicoSaude=new TecnicoSaude();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('admin.index');

        $admin=$this->objAdmin->all();
        return view('admin.index',compact('admin'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //19
        $admins=$this->objAdmin->all();
        $administradora=$this->objAdministradora->all();
        $clinica=$this->objClinica->all();
        $consulta=$this->objConsulta->all();
        $convenio=$this->objConvenio->all();
        $despesaFinanceira=$this->objDespesaFinanceira->all();
        $estoque=$this->objEstoque->all();
        $exame=$this->objExame->all();
        $medicamento=$this->objMedicamento->all();
        $medico=$this->objMedico->all();
        $paciente=$this->objPaciente->all();
        $procedimento=$this->objProcedimento->all();
        $procedimentoMedico=$this->objProcedimentoMedico->all();
        $procedimentoTecnico=$this->objProcedimentoTecnico->all();
        $receitaFinanceira=$this->objReceitaFinanceira->all();
        $relatorio=$this->objRelatorio->all();
        $relatorioFinanceiro=$this->objRelatorioFinanceiro->all();
        $secretaria=$this->objSecretaria->all();
        $tecnicoSaude=$this->objTecnicoSaude->all();
        return view('admin.create', compact('admins', 'administradora', 'clinica',
    'consulta', 'convenio', 'despesaFinanceira', 'estoque', 'exame', 'medicamento',
    'medico', 'paciente', 'procedimento', 'procedimentoMedico', 'procedimentoTecnico',
    'receitaFinanceira', 'relatorio', 'relatorioFinanceiro', 'secretaria', 'tecnicoSaude'));

        //return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objAdmin->create([
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
            'crm'=>$request->crm,
            'salario'=>$request->salario
            
        ]);
        if($cad){
            return redirect('admin');
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
        $admin= $this->objAdmin->find($id);
        return view('admin.show',compact('admin'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //19
        $admin=$this->objAdmin->find($id);
        $administradora=$this->objAdministradora->all();
        $clinica=$this->objClinica->all();
        $consulta=$this->objConsulta->all();
        $convenio=$this->objConvenio->all();
        $despesaFinanceira=$this->objDespesaFinanceira->all();
        $estoque=$this->objEstoque->all();
        $exame=$this->objExame->all();
        $medicamento=$this->objMedicamento->all();
        $medico=$this->objMedico->all();
        $paciente=$this->objPaciente->all();
        $procedimento=$this->objProcedimento->all();
        $procedimentoMedico=$this->objProcedimentoMedico->all();
        $procedimentoTecnico=$this->objProcedimentoTecnico->all();
        $receitaFinanceira=$this->objReceitaFinanceira->all();
        $relatorio=$this->objRelatorio->all();
        $relatorioFinanceiro=$this->objRelatorioFinanceiro->all();
        $secretaria=$this->objSecretaria->all();
        $tecnicoSaude=$this->objTecnicoSaude->all();
        return view('admin.create', compact('admin', 'administradora', 'clinica',
    'consulta', 'convenio', 'despesaFinanceira', 'estoque', 'exame', 'medicamento',
    'medico', 'paciente', 'procedimento', 'procedimentoMedico', 'procedimentoTecnico',
    'receitaFinanceira', 'relatorio', 'relatorioFinanceiro', 'secretaria', 'tecnicoSaude'));

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
        $this->objAdmin->where(['id'=>$id])->update([
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
            'crm'=>$request->crm,
            'salario'=>$request->salario
            
        ]);
            return redirect('admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$admin = $this->objAdmin->where('id',$id)->first()){
            return redirect()->back();  
          }
          $admin->delete();
          return redirect('admin');

    }
}
