<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(QuestionSeeder::class);
        // $this->call(AnswerSeeder::class);
        // for($i = 0 ; $i < 10 ; $i++){
        //     DB::table('answer_question')->insert(
        //         [
        //             'answer_id' => Answer::select('id')->orderByRaw("RAND()")->first()->id,
        //             'question_id' => Question::select('id')->orderByRaw("RAND()")->first()->id,
        //         ]
        //     );

        // }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
