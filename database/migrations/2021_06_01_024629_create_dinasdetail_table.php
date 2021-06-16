<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinasdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinasdetail', function (Blueprint $table) {
            $table->id();
            $table->string('dinas');
            $table->string('pimpinan');
            $table->string('jabatan')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telp')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('dinasdetail');
    }
}
