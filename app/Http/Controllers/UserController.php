<?php

namespace App\Http\Controllers;

use App\Mail\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Usuario;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;
class UserController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mostrar formulario
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( \App\Http\Requests\UserStoreRequest $request)
    {
        $usuario = new User();
        $usuario->name = $request->input('name');
        $usuario->apellido = $request->input('apellido');
        $usuario->email= $request ->input('email');
        $usuario->password = Hash::make($request->input('password'));
        $usuario->idRolFK=4;
        $usuario->estadoUsuario=1;
        $usuario->save();

        Mail::to($usuario->email)->send(new Registro());

        return redirect()->route('login.form')->with('mensaje' , "Usuario Registrado, por favor revisé spam o bandeja de entrada");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
