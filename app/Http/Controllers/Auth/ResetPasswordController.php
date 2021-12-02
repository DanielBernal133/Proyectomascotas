<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
//dependencias especificas de envio de correo
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Mail\Correo;
use Illuminate\Support\Facades\Mail;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreConfirmarCorreo;
use App\Http\Requests\StoreResetPassword;
use Illuminate\Support\Facades\Storage;


class ResetPasswordController extends Controller
{
    //mostrar el formulario de envio por
    public function emailform(){

  return view('auth.forgot-password')->with('correo');

    }
    //enviar el link de seguridad al coreo anterior
    public function submitlink(StoreConfirmarCorreo $request){

    //1. crear el codigo de seguridad
    $token = Str::random(64);
    //var_dump($token);

    //2. registrarlo en la tabla password_resets
    DB::table('password_resets')
    ->insert(
        [
            'email' => $request->input('email'),
            'token'=> $token,
            'created_at' => Carbon::now()

        ]
    );
    //php artisan make:mail
    //3. Enviar el correo con el codigo de seguridad

  Mail::to($request->input('email'))
     ->send(new Correo($token));



     return redirect()->route('confirmar')->with('mensaje' , "Correo de verificacion enviado,por favor revisé spam o bandeja de entrada");

    }

//mostrar el formulario de reseteo de password
public function resetform($token){


return view('auth.reset-password')
->with('token', $token);

}

//cambiar password
public function resetpassword(StoreResetPassword $request){

//1.Verificar que el token este en la tabal password resets
// bajo el email correct: DB:table



 $toke_hallado = DB::table('password_resets')
->where(['email' => $request->input('email'),
 'token' => $request->input('token')

 ] )->first();

if($toke_hallado === null){
  die('token invalido');
}


//2. si el token existe para el email,actualizar el password
// en la tabal users (users)

$usuario_actualizar = User::where( 'email', $request->input('email'))
                      ->first();
$usuario_actualizar->password = Hash::make($request->input('password'));
$usuario_actualizar->save();





//3. borrar el token de la tabla password_reset

  DB::table('password_resets')
   ->where ([ 'email' => $request->input('email')])
   ->delete();

   return redirect()->route('login.form')->with('mensaje' , "Tu contraseña ha sido cambiada exitosamente ");


}



}


