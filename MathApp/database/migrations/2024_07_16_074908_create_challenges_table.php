<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // In the up() method
Schema::create('challenges', function (Blueprint $table) {
    $table->id();
    $table->string('challenge_id');
    $table->date('starting_date');
    $table->date('ending_date');
    $table->integer('duration_per_challenge');
    $table->integer('number_of_questions');
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
        Schema::dropIfExists('challenges');
    }
};
