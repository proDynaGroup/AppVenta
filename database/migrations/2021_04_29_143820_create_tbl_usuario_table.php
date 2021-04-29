<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_usuario', function (Blueprint $table) {
            $table->id('usu_id');
            $table->string('usu_nombre',100);
            $table->integer('usu_cedula');
            $table->integer('usu_telefono');
            $table->string('usu_correo',100);
            $table->string('usu_pass',100);

            $table->unsignedBigInteger('emp_id')->nullable();
            $table->foreign('emp_id')->references('emp_id')->on('tbl_empresa')->onDelete('set null');

            $table->unsignedBigInteger('rol_id')->nullable();
            $table->foreign('rol_id')->references('rol_id')->on('tbl_rol')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_usuario');
    }
}
