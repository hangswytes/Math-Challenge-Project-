<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_answers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id('ans_id'); // Primary key for answers
            $table->foreignId('question_id')->constrained('questions')->onDelete('cascade'); // Foreign key
            $table->text('answer'); // Answer text
            $table->integer('marks'); // Marks for the answer
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
