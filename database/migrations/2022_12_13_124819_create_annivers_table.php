<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnniversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annivers', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('name');
            $table->string('anniversary');
            $table->string('start');
            $table->string('end');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
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
        Schema::dropIfExists('annivers');
    }
}
