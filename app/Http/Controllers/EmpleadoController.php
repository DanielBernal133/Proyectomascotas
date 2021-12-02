<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ValiEmpleado;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleados.tables')->with('empleados' , Empleado::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados=Empleado::All();
        $usuario=User::All();
        return view('empleados.create')->with("empleados", $empleados)->with("usuarios" , $usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValiEmpleado $request)
    {
        $nuevoempleado = new Empleado();
        $nuevoempleado->nombreEmpleado= $request->input("nombre");
        $nuevoempleado->precioProducto= $request->input("telefono");
        $nuevoempleado->estadoEmpleado= $request->input("estado");
        $nuevoempleado->idUsuarioFK= 9;
        $nuevoempleado->save();
        return redirect("empleados")->with('mensaje_exito' , "Empleado exitoso");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show')->with('empleado' , $empleado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit')->with('empleado' , $empleado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValiEmpleado $request, Empleado $empleado)
    {
        $empleado->nombreEmpleado= $request->input("nombre");
        $empleado->telefonoEmpleado= $request->input("telefono");
        $empleado->estadoEmpleado= $request->input("estado");
        $empleado->idUsuarioFK= $request->input("usuario");
        $empleado->save();
        return redirect("empleados")->with('mensaje_exito' , "Empleado Actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function habilitar($idEmpleado){
        $empleado = Empleado::find($idEmpleado);
        switch($empleado->estadoEmpleado){
            case null:
                $empleado->estadoEmpleado=1;
                $empleado->save();
                $mensaje_exito = 'Empleado Habilitado';
                break;
            case 1:
                $empleado->estadoEmpleado=2;
                $empleado->save();
                $mensaje_exito = 'Empleado Deshabilitado';

                break;

            case 2:
                $empleado->estadoEmpleado=1;
                $empleado->save();
                $mensaje_exito = 'Empleado Activado';
                break;
        }
        return redirect('empleados')->with('mensaje_exito', $mensaje_exito);
    }

}
