<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //vvincular modelo atributo
    protected $table="marca";
//establecer la PK para la entidad (por defecto: id)
protected $primaryKey ="idMarca";

    //omitir campos de auditoria
    public $timestamps = false;


    public function marcas(){

        return $this-> hasMany('App\Producto', 'idMarcaFK'  );
     }


}
