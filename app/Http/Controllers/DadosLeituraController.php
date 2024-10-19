<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use App\Models\DadosLeitura;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Models\Motor;


class DadosLeituraController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function salvarEmpresa(Request $request) {
        
        $dados = $request->only(['nome', 'cnpj']);

        $empresa = new Empresa();
        $empresa->nome = $dados['nome'];
        $empresa->cnpj = $dados['cnpj'];

        $empresa->save();
    }

    public function salvar(Request $request) {  //não sei se ta funcionando ;D

        $dados = $request->only(['corrente', 'dataLeitura', 'horaLeitura', 'motor_id']);
        
        DadosLeitura::create([
            'corrente' => $dados['corrente'],
            'dataLeitura' => $dados['dataLeitura'],
            'horaLeitura' => $dados['horaLeitura'],
            'motor_id' => $dados['motor_id'],
        ]);

        return response()->json(['message' => 'Dados salvos com sucesso!'], 201);
    }


    public function index()
    {
        //
    }
     

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }    
    

    public function show(DadosLeitura $dadosLeitura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DadosLeitura $dadosLeitura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DadosLeitura $dadosLeitura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DadosLeitura $dadosLeitura)
    {
        //
    }
}
