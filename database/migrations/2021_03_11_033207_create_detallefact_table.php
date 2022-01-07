<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallefactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallefact', function (Blueprint $table) {
            $table->increments('iddetalle');
            $table->date('fecha_fact');
            $table->string('num_fact');            
            $table->string('matricula');
            $table->string('reference_number')->nullable();
            $table->string('estado');
            $table->string('estado_pago');
            $table->string('impuesto');
            $table->string('descuento');
            $table->text('notes')->nullable();
            $table->string('tipo_descuento')->nullable();
            $table->decimal('descuento', 15, 2)->nullable();
            $table->unsignedBigInteger('valor_descuento')->nullable();
            $table->unsignedBigInteger('sub_total');
            $table->unsignedBigInteger('total');
            $table->unsignedBigInteger('impuesto');
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
        Schema::dropIfExists('detallefact');
    }
}
