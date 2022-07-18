<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Question1
        $question1 = Question::create([

            'question_name' => 'LOOP1',
            'question' => "<p dir=\"ltr\">public class Programming</p>\r\n<p dir=\"ltr\">{</p>\r\n<p dir=\"ltr\"><br>&nbsp; &nbsp; public static void Main()</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; { &nbsp; int x=1;</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; for ( [1] ; x &lt;= 4; [2] )</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; {</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(\"Value of x:\" + [3] );</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; }</p>\r\n<p dir=\"ltr\"><br>&nbsp; &nbsp; }</p>\r\n<p dir=\"ltr\">}</p>\r\n<p>&nbsp;</p>",
            'expected_result' => "<p dir=\"ltr\">Value of x:2</p>\r\n<p dir=\"ltr\">Value of x:3</p>\r\n<p dir=\"ltr\">Value of x:4</p>\r\n<p>&nbsp;</p>",
            'collection' => 'LOOP'
            // 'ARRAY',

        ]);
        Answer::create([
            'question_id' => $question1->id,
            'answer' => "x=2",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question1->id,
            'answer' => "x++",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question1->id,
            'answer' => "x",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question1->id,
            'answer' => "x=1",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question1->id,
            'answer' => "x--",
            'answer_status' => 'INCORRECT'
        ]);


        // Question2
        $question2 = Question::create([

            'question_name' => 'LOOP2',
            'question' => "<p>using System; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>public class Program<br>{<br>&nbsp; &nbsp; public static void Main()<br>&nbsp; &nbsp; {<br>&nbsp; &nbsp; &nbsp; &nbsp; int [1] ;<br>&nbsp; &nbsp; &nbsp; &nbsp; while( [2] ){<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(\"round: \"+count);<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [3] ;<br>&nbsp; &nbsp; &nbsp; &nbsp; }</p>\r\n<p>&nbsp; &nbsp; }<br>}</p>",
            'expected_result' => "<p>round: 1<br>round: 2<br>round: 3<br>round: 4<br>round: 5<br>round: 6<br>round: 7<br>round: 8<br>round: 9<br>round: 10</p>",
            'collection' => 'LOOP'
            // 'ARRAY',

        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => "count=1",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => "count<=10",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => "count++",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => "count=0",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => "count--",
            'answer_status' => 'INCORRECT'
        ]);

        // Question3
        $question2 = Question::create([

            'question_name' => 'LOOP3',
            'question' => "<p>using System; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>public class Program<br>{<br>&nbsp; &nbsp; public static void Main()<br>&nbsp; &nbsp; { &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; int [1] ;<br>&nbsp; &nbsp; &nbsp; &nbsp; do{<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(\"round: \"+ [2] );<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; count++;<br>&nbsp; &nbsp; &nbsp; &nbsp; }while( [3] ); &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; }<br>}</p>",
            'expected_result' => "<p>round: 1<br>round: 2<br>round: 3<br>round: 4<br>round: 5<br>round: 6<br>round: 7<br>round: 8<br>round: 9<br>round: 10</p>",
            'collection' => 'LOOP'
            // 'ARRAY',

        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => "count=1",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => "count",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => "count<=10",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => "count=0",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => "count++",
            'answer_status' => 'INCORRECT'
        ]);

        // Question::factory()->count(30)->create();
    }
}
