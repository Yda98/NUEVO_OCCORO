<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::all();
        return view('admin.documento.index', compact('documentos'));
    }

    public function create()
    {
        return view('admin.documento.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
        ]);

        Documento::create([
            'name' => $request->name,
            'age' => $request->age,
        ]);

        return redirect()->route('documentos.index')->with('success', 'Documento creado correctamente');
    }
    public function show(Documento $documento)
    {
        //
    }
    public function edit(Documento $documento)
    {
        return view('admin.documento.edit', compact('documento'));
    }
    public function update(Request $request, Documento $documento)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
        ]);

        $documento->update([
            'name' => $request->name,
            'age' => $request->age,
        ]);

        return redirect()->route('documentos.index')->with('success', 'Documento actualizado correctamente');
    }
    public function destroy(Documento $documento)
    {
        $documento->delete();

        return redirect()->route('documentos.index')->with('success', 'Documento eliminado correctamente');
    }
}
