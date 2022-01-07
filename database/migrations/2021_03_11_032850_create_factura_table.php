<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->increments('idfactura');
            $table->date('fecha_fact');
            $table->string('num_fact');            
            $table->string('matricula');
            $table->string('estado');//pagado|cancelado|otro
            $table->string('estado_pago');//acept|rechaz
            $table->string('impuesto');//%
            $table->string('descuento');//descrp
            $table->text('notes')->nullable();
            $table->string('tipo_descuento')->nullable();//pronto  pago
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
        Schema::dropIfExists('factura');
    }
}
