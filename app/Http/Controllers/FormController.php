<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $formularios = DB::table('formularios')->get();
       return view('formulario.mostrar', ['formularios' => $formularios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);

        DB::table("formularios")->insert(["Email"=>$request->input("email"), "Nombre"=>$request->input("nombre"), "Descripcion"=>$request->input("descripcion"), "Opcion"=>$request->input("flexRadioDefault"), "created_at"=>$request->input("horaActual")]);
        return redirect("formulario/finalFormulario");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('formulario.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formulario = DB::table('formularios')->find($id);
        return view('formulario.editar', ['formulario' => $formulario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('formularios')
        ->where('id', $id)
        ->update([
            'Email' => $request->input('email'),
            'Nombre' => $request->input('nombre'),
            'Descripcion' => $request->input('descripcion'),
            'Opcion' => $request->input('flexRadioDefault'),
            'updated_at' => now(),
        ]);

        return redirect('registroRespuestasFormularios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('formularios')->where('id', $id)->delete();
        return redirect("registroRespuestasFormularios");
    }
}