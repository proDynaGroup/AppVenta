<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTblProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_producto', function (Blueprint $table) {
            $table->unsignedBigInteger('emp_id')->nullable()->after('pro_codigo');
            $table->foreign('emp_id')->references('emp_id')->on('tbl_empresa')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_producto', function (Blueprint $table) {
            //
        });
    }
}
