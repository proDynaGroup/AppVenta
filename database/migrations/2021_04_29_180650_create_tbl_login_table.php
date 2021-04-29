<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_login', function (Blueprint $table) {
            $table->id('log_id');
            
            $table->unsignedBigInteger('usu_id')->nullable();
            $table->foreign('usu_id')->references('usu_id')->on('tbl_usuario')->onDelete('set null');

            $table->timestamps('log_fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_login');
    }
}
