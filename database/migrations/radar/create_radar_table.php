<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('station_name');
            $table->string('location')->unique();
            $table->timestamp('supply_date')->nullable();
            $table->string('installation');
            $table->timestamp('operation_date')->nullable();
            $table->string('delivery');
            $table->string('status_of_tower');
            $table->timestamp('LetterDate')->nullable();
            $table->string('Remarks');
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
        Schema::dropIfExists('radars');
    }
}
