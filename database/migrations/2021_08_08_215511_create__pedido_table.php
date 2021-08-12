<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_pedido', function (Blueprint $table) {
            $table->id();
            $table->date('fechaSolicitud');
            $table->date('fechaEnvio');
            $table->date('fechaEntrega');
            $table->String('estadoPedido');
            $table->foreignId('idClienteFK')->nullable();
            $table->foreignId('idEmpleadoFK')->nullable();
            $table->timestamps();

        });
    }





    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_pedido');
    }
}
