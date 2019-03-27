<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXacThucNDsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('XacThucNDs', function (Blueprint $table) {
            $table->bigIncrements('MaXTND');
            $table->unsignedBigInteger('MaND');
            $table->foreign('MaND')
                ->references('MaND')->on('NguoiDungs')
                ->onDelete('cascade');
            $table->string('token');
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
        Schema::dropIfExists('xac_thuc_n_d_s');
    }
}
