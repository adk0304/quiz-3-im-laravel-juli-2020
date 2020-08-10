<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan_manager', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jabatan');

            $table->unsignedBigInteger('proyek_id')->nullable();
            $table->foreign('proyek_id')->references('id')->on('proyek');
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
        Schema::dropIfExists('karyawan_manager');
    }
}
