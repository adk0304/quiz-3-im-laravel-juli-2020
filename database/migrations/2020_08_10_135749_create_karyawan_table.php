<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');


            $table->unsignedBigInteger('karyawan_manager_id');
            $table->foreign('karyawan_manager_id')->references('id')->on('karyawan_manager');
            $table->unsignedBigInteger('karyawan_staff_id');
            $table->foreign('karyawan_staff_id')->references('id')->on('karyawan_staff');
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
        Schema::dropIfExists('karyawan');
    }
}
