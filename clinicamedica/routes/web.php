<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::get('/', function () {
    return view('welcome');
});
Route::resource('procedimento', 'ProcedimentoController');
Route::resource('admin', 'AdminController');
Route::resource('administradora', 'AdministradoraController');
Route::resource('cadastro', 'CadastroController');
Route::resource('clinica', 'ClinicaController');
Route::resource('consulta', 'ConsultaController');
Route::resource('convenio', 'ConvenioController');
Route::resource('despesafinanceira', 'DespesaFinanceiraController');
Route::resource('estoque', 'EstoqueController');
Route::resource('exame', 'ExameController');
Route::resource('medicamento', 'MedicamentoController');
Route::resource('medico', 'MedicoController');
Route::resource('paciente', 'PacienteController');
Route::resource('procedimentomedico', 'ProcedimentoMedicoController');
Route::resource('procedimentotecnico', 'ProcedimentoTecnicoController');
Route::resource('receitafinanceira', 'ReceitaFinanceiraController');
Route::resource('relatoriofinanceiro', 'RelatorioFinanceiroController');
Route::resource('relatoriopaciente', 'RelatorioPacienteController');
Route::resource('paciente', 'PacienteController');
Route::resource('secretaria', 'SecretariaController');
Route::resource('tecnicosaude', 'TecnicoSaudeController');


//$this->get('one-to-one', 'OneToOneController@oneToOne');
