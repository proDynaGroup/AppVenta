<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cliente', function (Blueprint $table) {
            $table->id('cli_id');

            $table->unsignedBigInteger('pro_id')->nullable();
            $table->foreign('pro_id')->references('pro_id')->on('tbl_producto')->onDelete('set null');
            
            $table->string('cli_nombre',100);
            $table->string('cli_telefono',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_cliente');
    }
}
