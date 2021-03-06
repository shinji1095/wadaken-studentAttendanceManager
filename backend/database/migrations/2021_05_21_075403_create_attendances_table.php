<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('attendances')){
            Schema::create('attendances', function (Blueprint $table) {
                $table->id();
                $table->integer('roomID');
                $table->time('arrival');
                $table->time('leave');
                $table->string('riskForLunch');
                $table->string('riskForDinner');
                $table->integer("userID");
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
