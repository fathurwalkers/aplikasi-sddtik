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
            $table->dateTime('detail_ttl')->nullable();
            $table->string('detail_usia')->nullable();
            $table->string('detail_jeniskelamin')->nullable();
            $table->string('detail_nama_ayah')->nullable();
            $table->string('detail_nama_ibu')->nullable();
            $table->string('detail_alamat')->nullable();
            $table->string('detail_type')->nullable();

            // $table->string('detail_no_kk')->nullable();
            // $table->string('detail_provinsi')->nullable();
            // $table->string('detail_kota')->nullable();
            // $table->string('detail_kecamatan')->nullable();
            // $table->string('detail_puskesmas')->nullable();
            // $table->string('detail_desa')->nullable();
            // $table->string('detail_posyandu')->nullable();
            // $table->string('detail_nohp_ortu')->nullable();

            $table->unsignedBigInteger('login_id')->nullable()->default(null);
            $table->foreign('login_id')->references('id')->on('login')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail');
    }
}