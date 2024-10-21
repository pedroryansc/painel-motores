<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input('filtro');

        $empresas = Empresa::where('nome', 'LIKE', $filtro.'%');

        if (request()->session()->has('toast')) {
            return view('empresa.index')->with('empresa', $empresas)->with('filtro', $filtro)->with(session('toast'));
        }

        return view('empresa.index')->with('empresa', $empresas)->with('filtro', $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $empresa = Empresa::create($input);
        $empresa->save();

        return redirect()->route('empresa.index')->with('toast', ['type' => 'success', 'message' => 'Empresa adicionada com sucesso.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $empresa = Empresa::find($id);

        return view('empresa.show', ['empresa'=>$empresa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $empresa = Empresa::find($id);

        return view('empresa.edit', ['empresa'=>$empresa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $empresa = Empresa::find($id);

        $input = $request->all();

        $empresa->nome = $input['nome'];
        $empresa->cnpj = $input['cnpj'];
        
        $empresa->save();

        return redirect()->route('empresa.index')->with('toast', ['type' => 'success', 'message' => 'Empresa editada com sucesso.']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $empresa = Empresa::find($id);

        try {
            $empresa->delete();
        } catch (\Exception $e) {
            if ($e instanceof \Illuminate\Database\QueryException && $e->errorInfo[1] == 1451) {
                return redirect()->route('empresa.index')->with('toast', ['type' => 'warning', 'message' => 'Não é Possível excluir itens com vínculos']);
            } else {
                return redirect()->route('empresa.index')->with('toast', ['type' => 'danger', 'message' => 'Erro Inesperado ('.$e->getMessage().")"]);
            }
        }

        return redirect()->route('empresa.index')->with('toast', ['type' => 'success', 'message' => 'Empresa excluída com sucesso.']);
    }
}
