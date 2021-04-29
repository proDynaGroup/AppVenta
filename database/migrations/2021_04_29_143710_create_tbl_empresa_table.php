<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_empresa', function (Blueprint $table) {
            $table->id('emp_id');
            $table->string('emp_nombre',100);
            $table->integer('emp_ruc');
            $table->string('emp_dire',100);
            $table->integer('emp_telfono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_empresa');
    }
}
