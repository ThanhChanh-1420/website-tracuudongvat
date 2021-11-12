<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDongvat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dongvat', function (Blueprint $table) {
            $table->id();
            $table->string('tenkhoahoc')->nullable();
            $table->string('tentiengviet')->nullable();
            $table->string('tendiaphuong')->nullable();
            $table->string('gioi')->nullable();
            $table->string('nganh')->nullable();
            $table->string('lop')->nullable();
            $table->string('bo')->nullable();
            $table->string('ho')->nullable();
            $table->string('hinhthai')->nullable();
            $table->string('sinhthai')->nullable();
            $table->string('giatri')->nullable();
            $table->string('iucn')->nullable();
            $table->string('sachdo')->nullable();
            $table->string('nghidinh')->nullable();
            $table->string('cities')->nullable();
            $table->string('phanbo')->nullable();
            $table->string('tinhtrang')->nullable();
            $table->string('sinhcanh')->nullable();
            $table->string('diadiem')->nullable();
            $table->string('ngaythuthap')->nullable();
            $table->string('nguoithuthap')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('duongdan')->nullable();
            $table->integer('nguoitao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dongvat');
    }
}
