<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MembershipsGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('books')->default(3);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unique(['user_id', 'start_date', 'end_date']);
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
        Schema::dropIfExists('memberships');
    }
}
