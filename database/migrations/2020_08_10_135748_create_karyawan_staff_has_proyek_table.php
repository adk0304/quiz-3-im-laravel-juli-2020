<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanStaffHasProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan_staff_has_proyek', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('karyawan_staff_id');
            $table->foreign('karyawan_staff_id')->references('id')->on('karyawan_staff');
            $table->unsignedBigInteger('proyek_id');
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
        Schema::dropIfExists('karyawan_staff_has_proyek');
    }
}
