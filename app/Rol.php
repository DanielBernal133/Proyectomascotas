<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //vvincular modelo atributo
    protected $table="rol";
//establecer la PK para la entidad (por defecto: id)
protected $primaryKey ="idRol";

    //omitir campos de auditoria
    public $timestamps = false;



     public function usuarios(){

        return $this-> hasMany('App\Usuario', 'idRolFK' );
     }


}

