<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_masuk', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_bm');
            $table->bigInteger('barang_id')->unsigned();
            $table->string('keterangan');
            $table->integer('jumlah');
            $table->integer('harga_total');
            $table->string('user');
            $table->string('supplier');

            $table->foreign("barang_id")->references('id')
            ->on('barang')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('b_masuk');
    }
}
