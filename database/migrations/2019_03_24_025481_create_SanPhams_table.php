<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPhams', function (Blueprint $table) {
            $table->bigIncrements('MaSP');
            $table->unsignedBigInteger('MaLoai');
            $table->string('TenSP');
            $table->double('Gia');
            $table->integer('SoLuong');
            $table->unsignedBigInteger('MaTG');
            $table->text('MoTa');
            $table->integer('SoTrang');
            $table->string('LoaiBia');
            $table->string('KichThuoc');
            $table->double('CanNang');
            $table->string('NgonNgu');
            $table->string('NXB');
            $table->year('NamXB');
            $table->string('DichGia');
            $table->unsignedBigInteger('MaCTPH');
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
        Schema::dropIfExists('san_phams');
    }
}
