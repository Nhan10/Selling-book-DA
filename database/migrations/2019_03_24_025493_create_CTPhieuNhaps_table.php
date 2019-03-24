<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCTPhieuNhapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CTPhieuNhaps', function (Blueprint $table) {
            $table->bigIncrements('MaCTPN');
            $table->unsignedBigInteger('MaPN');
            $table->unsignedBigInteger('MaSP');
            $table->integer('SoLuong');
            $table->text('GhiChu');
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
        Schema::dropIfExists('c_t_phieu_nhaps');
    }
}
