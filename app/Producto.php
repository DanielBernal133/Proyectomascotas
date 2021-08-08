<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //vvincular modelo atributo
    protected $table="producto";
//establecer la PK para la entidad (por defecto: id)
protected $primaryKey ="idProducto";

    //omitir campos de auditoria
    public $timestamps = false;


    public function productos(){

        return $this-> hasMany('App\pedidoDeProducto', 'idProductoFK'  );
     }

}

