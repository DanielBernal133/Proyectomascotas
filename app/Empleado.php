<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //vincular modelo a tabla
    protected $table="Empleado";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "idEmpleado";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion 1 a M entre empleado y pedido
    public function pedido (){
        //utilizo el metodo de eloquent: hasMany
        return $this->hasMany('App\Pedido', 'idEmpleado');
    }

    public function usuario(){
        return $this->belongsto("App\User" , 'idUsuarioFK');
    }


}
