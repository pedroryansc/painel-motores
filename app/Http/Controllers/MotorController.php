<?php

namespace App\Http\Controllers;

use App\Models\DadosLeitura;
use App\Models\Motor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = Motor::all();

        return view('motor.index', ['motor' => $motor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('motor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $motor = new Motor();

        $motor->empresa_id = 1;
        $motor->hash = Str::random(32);
        $motor->descricao = $request->input('descricao');
        $motor->isFake = false;
        $motor->save();

        return redirect()->route('motor.index')->with('toast', ['type' => 'success', 'message' => 'motor adicionado com sucesso.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Motor $motor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Motor $motor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Motor $motor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $motor = Motor::find($id);

        try {
            $motor->delete();
        } catch (\Exception $e) {
            if ($e instanceof \Illuminate\Database\QueryException && $e->errorInfo[1] == 1451) {
                return redirect()->route('motor.index')->with('toast', ['type' => 'warning', 'message' => 'Não é Possível excluir itens com vínculos']);
            } else {
                return redirect()->route('motor.index')->with('toast', ['type' => 'danger', 'message' => 'Erro Inesperado ('.$e->getMessage().")"]);
                echo "Erro ao excluir item: " . $e->getMessage();
            }
        }

        return redirect()->route('motor.index')->with('toast', ['type' => 'success', 'message' => 'Motor excluído com sucesso.']);


    }

    public function dataMotor()
    {
        $indicadores = DadosLeitura::all();
        return response()->json($indicadores);
    }

}
