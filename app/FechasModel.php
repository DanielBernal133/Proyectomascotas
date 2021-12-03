<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FechasModel extends Model
{
        //vvincular modelo atributo
        protected $table="fechaarreglo";
        //establecer la PK para la entidad (por defecto: id)
        protected $primaryKey ="idFechas";
        //omitir campos de auditoria
        public $timestamps = false;
}
