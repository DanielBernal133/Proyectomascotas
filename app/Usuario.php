<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
   //vvincular modelo atributo
   protected $table="usuario";
   //establecer la PK para la entidad (por defecto: id)
   protected $primaryKey ="idUsuario";

       //omitir campos de auditoria
       public $timestamps = false;


       public function clientes(){
        return $this-> hasMany('App\Cliente', 'idUsuarioFK' );
     }


     public function empleados(){
        return $this-> hasMany('App\Empleado', 'idUsuarioFk' );
     }


   }
