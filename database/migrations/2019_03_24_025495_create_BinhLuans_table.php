<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinhLuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BinhLuans', function (Blueprint $table) {
            $table->bigIncrements('MaBL');
            $table->unsignedBigInteger('MaND');
            $table->unsignedBigInteger('MaSP');
            $table->text('NoiDung');
            $table->dateTime('NgayBL');
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
        Schema::dropIfExists('binh_luans');
    }
}
