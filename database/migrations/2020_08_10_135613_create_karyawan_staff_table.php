<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan_staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jabatan');

            $table->unsignedBigInteger('karyawan_manager_id')->nullable();
            $table->foreign('karyawan_manager_id')->references('id')->on('karyawan_manager');
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
        Schema::dropIfExists('karyawan_staff');
    }
}
