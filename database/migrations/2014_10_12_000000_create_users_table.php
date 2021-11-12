<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoidung', function (Blueprint $table) {
            $table->id();
            $table->string('tendangnhap')->unique()->nullable();
            $table->string('matkhau')->unique()->nullable();
            $table->string('tenhienthi')->nullable();
            $table->string('anhdaidien')->nullable();
            $table->date('ngaysinh')->nullable();
            $table->string('gioitinh')->nullable();
            $table->string('sodienthoai')->nullable();
            $table->string('diachi')->nullable();
            $table->integer('vaitro')->nullable();
            $table->timestamp('thoigianthem')->nullable();
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
        Schema::dropIfExists('users');
    }
}
