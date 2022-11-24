<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class Hotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ehotel.hotels', function (Blueprint $table) {
            $table->id('id_hotel');
            $table->string('name')->unique();
            $table->string('kota');
            $table->string('provinsi');
            $table->integer('no_telp');
            $table->foreignId('id_user')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('tb_hotel');
    }
}
