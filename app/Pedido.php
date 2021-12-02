<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
        //vvincular modelo atributo
        protected $table="pedido";
        //establecer la PK para la entidad (por defecto: id)
        protected $primaryKey ="idPedido";

        //omitir campos de auditoria
        public $timestamps = false;

        // public function pedidos(){

        //      return $this-> hasMany('App\Cliente', 'idClienteFK' );
        //   }

        public function pediditos(){

            return $this-> hasMany('App\pedidoDeProducto', 'idPedidoFK'  );
        }

        public function clientes(){
            return $this->hasMany(Cliente::class, 'nombreCliente', 'nombreCliente');
        }

        public function Cliente(){
            return $this->belongsto("App\Cliente" , 'idClienteFK');
        }

        public function empleado(){
            return $this->belongsto("App\Empleado" , 'idEmpleadoFK');
        }
}

