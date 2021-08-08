<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //vvincular modelo atributo
    protected $table="empleado";
//establecer la PK para la entidad (por defecto: id)
protected $primaryKey ="idEmpleado";

    //omitir campos de auditoria

    public $timestamps = false;




     public function empleadospedidos(){

        return $this-> hasMany('App\Pedido', 'idEmpleadoFK' );
     }

}
