<?php

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_question', function (Blueprint $table) {
            $table->foreignIdFor(Answer::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Question::class)->constrained()->onDelete('cascade');
            $table->primary(['answer_id', 'question_id']);

            $table->index('answer_id');
            $table->index('question_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_question');
    }
};
