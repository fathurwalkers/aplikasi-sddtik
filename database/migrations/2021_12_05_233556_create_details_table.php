<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('detail', function (Blueprint $table) {
            $table->id();

            $table->string('detail_nama')->nullable();
            $table->string('detail_nik')->nullable();
            $table->dateTime('detail_ttl')->nullable();
            $table->string('detail_jeniskelamin')->nullable();
            $table->string('detail_nama_ayah')->nullable();
            $table->string('detail_nama_ibu')->nullable();
            $table->string('detail_alamat')->nullable();
            $table->string('detail_riwayat_persalinan')->nullable();
            $table->integer('detail_berat_badan_lahir')->nullable();
            $table->integer('detail_tinggi_badan_lahir')->nullable();

            // $table->unsignedBigInteger('login_id')->nullable()->default(null);
            // $table->foreign('login_id')->references('id')->on('login')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail');
    }
}
