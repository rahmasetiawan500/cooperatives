<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjamans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id');
            $table->string('nama_anggota');
            $table->string('nama_admin');
            $table->string('alasan_pinjaman');
            $table->integer('nilai_pinjaman');
            $table->date('tanggal_pinjaman');
            $table->string('lama_pinjaman');
            $table->softDeletes();
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
        Schema::dropIfExists('pinjamans');
    }
}
