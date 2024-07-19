<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBestParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('best_participants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->integer('position');
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
        Schema::dropIfExists('best_participants');
    }
}
