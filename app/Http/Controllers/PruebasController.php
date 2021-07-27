<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequestPrueba;
use App\Models\Categoria;
use App\Models\Prueba;
use Illuminate\Http\Request;

class PruebasController extends Controller
{

    public function index()
    {
        $pruebas = Prueba::all();
        return view('pruebas.index', compact('pruebas'));
    }


    public function create()
    {
        return view('pruebas.create');
    }


    public function store(PostRequestPrueba $request)
    {
        $data = $request->validated();
        Prueba::create($data);
        return redirect()->route('pruebas.index');
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $prueba = Prueba::find($id);
        return view('pruebas.edit', compact('prueba'));
    }


    public function update(PostRequestPrueba $request, Prueba $prueba)
    {
        $data = $request->validated();
        $prueba->fill($data);
        $prueba->save();
        return redirect()->route('pruebas.index');
    }


    public function destroy($id)
    {
        try {
        $prueba= Prueba::find($id);
        $prueba->delete();
        return redirect()->route('pruebas.index')->with('status','success');
    } catch (\Illuminate\Database\QueryException $e) {
        return redirect()->route('pruebas.index')->with('status', 'error');
    }
    }
}
