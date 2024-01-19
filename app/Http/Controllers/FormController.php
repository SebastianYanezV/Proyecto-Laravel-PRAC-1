<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\DataTables\FormulariosDataTable;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FormulariosDataTable $formulario)
    {
       //$formularios = DB::table('formularios')->get();
       //return view('formulario.mostrar', ['formularios' => $formularios]);
       return $formulario->render('formulario.mostrar');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);

        $validacion = ['email' => 'required|email', 'nombre' => 'required|string|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ ]+$/', 'comentarios' => 'nullable|string', 'genero' => ['required', Rule::in(['Masculino', 'Femenino', 'Prefiero no decirlo'])], 'satisfaccion' => ['required', Rule::in(['Muy bien', 'Bien', 'Neutral', 'Mal', 'Muy mal'])], 'horaActual' => 'required|date', 'captcha' => 'required|captcha',];
        
        $mensajes = [
            'email.required' => 'El campo Email es obligatorio.',
            'email.email' => 'Por favor, ingrese una dirección de correo electrónico válida.',
            'nombre.required' => 'El campo Nombre es obligatorio.',
            'nombre.string' => 'El campo Nombre debe ser una cadena de texto.',
            'nombre.regex' => 'El campo Nombre debe contener solo letras y espacios.',
            'genero.required' => 'El campo Género es obligatorio.',
            'genero.in' => 'Seleccione una opción válida para el campo Género.',
            'satisfaccion.required' => 'El campo Satisfacción es obligatorio.',
            'satisfaccion.in' => 'Seleccione una opción válida para el campo Satisfacción.',
            'horaActual.required' => 'El campo Hora Actual es obligatorio.',
            'horaActual.date' => 'El campo Hora Actual debe ser una fecha válida.',
            'captcha.required' => 'Responder el captcha es obligatorio.',
        ];

        $this->validate($request, $validacion, $mensajes);

        DB::table("formularios")->insert(["Email"=>$request->input("email"), "Nombre"=>$request->input("nombre"), "Comentarios"=>$request->input("comentarios"), "Genero"=>$request->input("genero"), "Satisfaccion"=>$request->input("satisfaccion"), "created_at"=>$request->input("horaActual")]);
        
        /*El return que no está comentado redirecciona a otra pestaña que avisa que el formulario
        se creó con exito.

        El return que está comentado redirecciona a la misma pestaña donde se rellenan
        los campos del formulario y muestra un mensaje flash diciendo que el formulario se
        creó con éxito.*/

        return redirect("forms/finalFormulario");
        //return redirect()->route('forms.create')->with("success", "Formulario creado con exito");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
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
        $validacion = ['email' => 'required|email', 'nombre' => 'required|string|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ ]+$/', 'comentarios' => 'nullable|string', 'genero' => ['required', Rule::in(['Masculino', 'Femenino', 'Prefiero no decirlo'])], 'satisfaccion' => ['required', Rule::in(['Muy bien', 'Bien', 'Neutral', 'Mal', 'Muy mal'])]];
        
        $mensajes = [
            'email.required' => 'El campo Email es obligatorio.',
            'email.email' => 'Por favor, ingrese una dirección de correo electrónico válida.',
            'nombre.required' => 'El campo Nombre es obligatorio.',
            'nombre.string' => 'El campo Nombre debe ser una cadena de texto.',
            'nombre.regex' => 'El campo Nombre debe contener solo letras y espacios.',
            'genero.required' => 'El campo Género es obligatorio.',
            'genero.in' => 'Seleccione una opción válida para el campo Género.',
            'satisfaccion.required' => 'El campo Satisfacción es obligatorio.',
            'satisfaccion.in' => 'Seleccione una opción válida para el campo Satisfacción.',
        ];

        $this->validate($request, $validacion, $mensajes);

        DB::table('formularios')
        ->where('id', $id)
        ->update([
            'Email' => $request->input('email'),
            'Nombre' => $request->input('nombre'),
            'Comentarios' => $request->input('comentarios'),
            'Genero' => $request->input('genero'),
            'Satisfaccion' => $request->input('satisfaccion'),
            'updated_at' => now(),
        ]);

        //return redirect('forms.index');
        return redirect()->route('forms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('formularios')->where('id', $id)->delete();
        return redirect()->route('forms.index');
    }

    public function reloadCaptcha()
    {
        //return response()->json(['captcha'=> captcha_img('math')]);
        return captcha_img('math');
    }
}