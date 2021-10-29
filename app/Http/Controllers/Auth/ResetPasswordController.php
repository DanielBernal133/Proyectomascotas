<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//dependencias especificas de envio de correo
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Mail\CorreoLink;
use Illuminate\Support\Facades\Mail;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreReset;
use App\Http\Requests\StorePassReset;

class ResetPasswordController extends Controller
{
    //mostrar formulario de enviode link por
    public function emailform(){
        return view('auth.email_confirm');
    }

    //codigo de confirmacion al correo anterior
    public function submitlink(StoreReset $request){
        //crear el cod ded seguridad
        $token = Str::random(64);
        //registrarlo en la tabla passwords resets
        DB::table('password_resets')
            ->insert(
                [
                    'email' => $request->input('email'),
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]
            );
        //enviar el correo con el cod de seguridad
        Mail::to($request->input ('email'))
        ->send(new CorreoLink($token));
        return redirect("confirmar-correo")->with('mensaje', "Correo de verificación enviado, revise su bandeja de entrada");
    }

    //mostrar formulario de eseteo de pass
    public function resetform($token){

        return view ('auth.reset-password')
                ->with('token', $token);

    }

    //cambiar pass
    public function resetpassword(StorePassReset $request){

        //1. veificar que el token este en la tabla password resets bajo el email correcto: DB:Table
        $token_hallado=DB::table('password_resets')
        ->where(['email' => $request->input('email'),
                 'token' => $request->input('token')] )
        ->first();

        if($token_hallado === null){
            die('token invalido');
        }

        //2. si el token existe para el email actualizar en la tabla users (entidades)
        $usuario_actualizar = User::where('email', $request->input('email'))->first();
        $usuario_actualizar->password = Hash::make($request->password);
        $usuario_actualizar->save();
        //3. borrar el token de la tabla users
        DB::table('password_resets')
        ->where(['email' => $request->input('email')])
        ->delete();

        return redirect("login")->with('mensaje', "Contraseña cambiada exitosamente");
    }
}
