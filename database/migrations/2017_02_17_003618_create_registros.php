<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registros', function (Blueprint $table) {
             $table->increments('id');
             $table->date_create("Fecha de solicitud");
             $table->string("Tipo de operación",12)
             $table->string("Abogado",50);
             $table->string("Quien solicita",50)
             $table->string("A quien se factura",50);
             $table->string("Telefono",10)
             $table->string("Correo electronico",70);
             $table->string("Cliente consentrador",12)
             $table->date("Feca de entrega");
             $table->string("Trabajo a relizar y doc. entregados",500)
             $table->string("Concargoa  cliente",2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registros', function (Blueprint $table) {
            //
        });
    }
}
