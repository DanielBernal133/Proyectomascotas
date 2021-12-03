<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidoDeProducto extends Model
{
    //vvincular modelo atributo
    protected $table="pedidodeproducto";
//establecer la PK para la entidad (por defecto: id)
protected $primaryKey ="idProductoFK , idPedidoFK";

    //omitir campos de auditoria
    public $timestamps = false;

    public function productos(){
        return $this->hasOne(Producto::class, 'nombreProducto', 'nombreProducto');
    }
}

