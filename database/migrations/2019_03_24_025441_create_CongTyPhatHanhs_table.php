<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongTyPhatHanhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CongTyPhatHanhs', function (Blueprint $table) {
            $table->bigIncrements('MaCTPH');
            $table->string('TenCTPH');
            $table->string('DiaChi');
            $table->string('SDT',15);
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
        Schema::dropIfExists('cong_ty_phat_hanhs');
    }
}
