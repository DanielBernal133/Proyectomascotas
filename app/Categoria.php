<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //vvincular modelo atributo
    protected $table="categoria";
//establecer la PK para la entidad (por defecto: id)
protected $primaryKey ="idCategoria";

    //omitir campos de auditoria
    public $timestamps = false;


    public function categorias(){

        return $this-> hasMany('App\Producto', 'idCategoriaFK'  );
     }

}
