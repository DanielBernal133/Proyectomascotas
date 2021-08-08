<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //vvincular modelo atributo
    protected $table="cliente";
//establecer la PK para la entidad (por defecto: id)
protected $primaryKey ="idCliente";

    //omitir campos de auditoria
    public $timestamps = false;



   
}
