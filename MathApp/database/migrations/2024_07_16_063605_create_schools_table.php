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
Schema::create('schools', function (Blueprint $table) {
    $table->id();
    $table->string('school_id');
    $table->string('school_regno');
    $table->string('district');
    $table->string('name');
    $table->string('representative_name');
    $table->string('representative_email');
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
        Schema::dropIfExists('schools');
    }
};
