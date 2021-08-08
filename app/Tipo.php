<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    //vvincular modelo atributo
    protected $table="tipo";
//establecer la PK para la entidad (por defecto: id)
protected $primaryKey ="idTipo";

    //omitir campos de auditoria
    public $timestamps = false;


    public function tipos(){

        return $this-> hasMany('App\Categoria', 'idTipoFK'  );
     }
}

