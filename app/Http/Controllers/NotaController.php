<?php

namespace App\Http\Controllers;

use App\Nota;
use Illuminate\Http\Request;
use App;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = App\Nota::paginate(2);
        return view('welcome', compact("notas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $agregarNota = new Nota;
      $agregarNota->nombre =  $request->nombre;
      $agregarNota->descripcion =  $request->descripcion;
      $agregarNota->save();
      return back()->with('agregar', 'La nota se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notaActualizar = App\Nota::findOrFail($id);
        return view("editar", compact("notaActualizar"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newNote = App\Nota::findOrFail($id);
        $newNote->nombre = $request->nombre;
        $newNote->descripcion = $request->descripcion;
        $newNote->save();
        return back()->with('update', 'La nota ha sido actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar = App\Nota::findOrFail($id);
        $eliminar->delete();
        return back()->with('update', 'La nota ha sido eliminada.');
    }
}
