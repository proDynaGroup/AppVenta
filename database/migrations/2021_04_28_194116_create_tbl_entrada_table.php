<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblEntradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_entrada', function (Blueprint $table) {
            $table->id('ent_id');

            $table->unsignedBigInteger('pro_id')->nullable();
            $table->foreign('pro_id')->references('pro_id')->on('tbl_producto')->onDelete('set null');

            
            $table->date('ent_fecha');

            $table->integer('ent_cantidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_entrada');
    }
}
