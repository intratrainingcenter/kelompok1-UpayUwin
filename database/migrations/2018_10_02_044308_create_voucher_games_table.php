<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoucherGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_voucher');
            $table->string('nama_voucher');
            $table->integer('kode_kategori');
            $table->integer('harga_voucher');
            $table->date('masa_aktif');
            $table->enum('status',['Aktif','Pasif']);
            $table->string('foto');
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
        Schema::dropIfExists('voucher_games');
    }
}
