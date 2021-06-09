<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addrooms', function (Blueprint $table) {
            $table->id();
            // $table->integer('workspaces_id')->unsigned();
            // $table->foreign('workspaces_id')->references('id')->on('workspaces');
            $table->string('type');
            $table->integer('capacity')->length(11);
            $table->text('discription');
            $table->string('room');
            $table->integer('price')->length(11);
            $table->string('price_time');
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
        Schema::dropIfExists('addrooms');
    }
}
