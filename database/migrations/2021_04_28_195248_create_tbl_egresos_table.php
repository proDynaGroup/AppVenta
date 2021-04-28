<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_egresos', function (Blueprint $table) {
            $table->id('egr');

            $table->unsignedBigInteger('pro_id')->nullable();
            $table->foreign('pro_id')->references('pro_id')->on('tbl_producto')->onDelete('set null');
            
            $table->string('egr_desc',100);
            $table->double('egr_costo',5,2);
            $table->timestamps('egr_fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_egresos');
    }
}
