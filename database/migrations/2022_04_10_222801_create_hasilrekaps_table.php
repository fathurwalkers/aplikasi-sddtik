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
            $table->text('keterangan_bbtb')->nullable();
            $table->text('keterangan_lk')->nullable();
            $table->text('keterangan_kpsp')->nullable();
            $table->text('keterangan_tdd')->nullable();
            $table->text('keterangan_tdl')->nullable();
            $table->text('keterangan_kmpe')->nullable();
            $table->text('keterangan_mchat')->nullable();
            $table->text('keterangan_gpph')->nullable();

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
