<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\Tarefa as ModelsTarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        return Tarefa::all();
    }

    public function store(Request $request)
    {
        $tarefa = Tarefa::create($request->all());
        return response()->json($tarefa,201);
    }

    public function show(string $id)
    {
        return Tarefa::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->update($request->all());
        return response()->json($tarefa, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tarefa = Tarefa::find($id)->delete();
        return response()->json(null, 204);
    }
}
