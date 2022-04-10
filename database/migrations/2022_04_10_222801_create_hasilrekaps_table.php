<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilrekapsTable extends Migration
{
    public function up()
    {
        Schema::create('hasil_rekap', function (Blueprint $table) {
            $table->id();

            $table->integer('bulan')->nullable();
            $table->string('bbtb')->nullable();
            $table->string('lk')->nullable();
            $table->string('kpsp')->nullable();
            $table->string('tdd')->nullable();
            $table->string('tdl')->nullable();
            $table->string('kmpe')->nullable();
            $table->string('mchat')->nullable();
            $table->string('gpph')->nullable();

            $table->unsignedBigInteger('data_id')->nullable()->default(null);
            $table->foreign('data_id')->references('id')->on('detail')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hasil_rekap');
    }
}
