<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_proveedor', function (Blueprint $table) {
            $table->id('prv_id');
            $table->string('prv_nombre',100);
            $table->string('prv_empresa',100);
            $table->integer('prv_telefono');
            $table->string('prv_dire',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_proveedor');
    }
}
