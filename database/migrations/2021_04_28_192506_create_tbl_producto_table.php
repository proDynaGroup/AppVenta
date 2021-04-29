<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_producto', function (Blueprint $table) {
            $table->id('pro_id');
            $table->integer('pro_codigo');
            //calves foraneas
            $table->unsignedBigInteger('prv_id')->nullable();
            $table->foreign('prv_id')->references('prv_id')->on('tbl_proveedor')->onDelete('set null');
         
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->foreign('cat_id')->references('cat_id')->on('tbl_categoria')->onDelete('set null');

            $table->string('pro_nombre',100);
            $table->integer('pro_stock');
            $table->string('pro_des',100);
            $table->double('pro_precio',4,2);
            $table->string('pro_obser',100);
            $table->date('pro_fecha');
            $table->double('pro_ganancia',4,2);
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_producto');
    }
}
