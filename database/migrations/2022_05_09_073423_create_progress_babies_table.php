<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressBabiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress_babies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bayi')->nullable();
            $table->integer('bulan_ke');
            $table->decimal('panjang_bayi', 11, 2);
            $table->decimal('berat_bayi', 11, 2);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_bayi')->references('id')->on('babies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progress_babies');
    }
}
