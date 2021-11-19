<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

        //vvincular modelo atributo
        protected $table="usuario";
        //establecer la PK para la entidad (por defecto: id)
        protected $primaryKey ="idUsuario";
        //omitir campos de auditoria
        public $timestamps = false;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function clientes(){

        return $this-> hasMany('App\Cliente', 'idUsuarioFK' );
    }


    public function empleados(){
        return $this-> hasMany('App\Empleado', 'idUsuarioFk' );
    }



}
