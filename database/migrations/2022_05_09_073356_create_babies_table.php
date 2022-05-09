<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('babies', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 256);
            $table->unsignedBigInteger('id_parent');
            $table->string('tempat_lahir', 256);
            $table->date('tanggal_lahir');
            $table->integer('anak_ke');
            $table->integer('jenis_kelamin');
            $table->string('golongan_darah');
            $table->decimal('panjang_bayi', 11, 2);
            $table->decimal('berat_bayi', 11, 2);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_parent')->references('id')->on('parents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('babies');
    }
}
