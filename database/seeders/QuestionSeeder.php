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
            'question' => "<p dir=\"ltr\">public class Programming</p>\r\n<p dir=\"ltr\">{</p>\r\n<p dir=\"ltr\"><br>&nbsp; &nbsp; public static void Main()</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; { &nbsp; int x=1;</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; for ( [1] ; x &lt;= 4; [2] )</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; {</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(\"Value of x:\" + [3]);</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; }</p>\r\n<p dir=\"ltr\"><br>&nbsp; &nbsp; }</p>\r\n<p dir=\"ltr\">}</p>\r\n<p>&nbsp;</p>",
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
            'question' => "<div>\r\n<div>using System;</div>\r\n<div>public class Program</div>\r\n<div>{</div>\r\n<div>&nbsp; &nbsp; public static void Main()</div>\r\n<div>&nbsp; &nbsp; {</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; int [1] ;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; while( [2] ){</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(\"round: \"+count);</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [3] ;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; }</div>\r\n<br>\r\n<div>&nbsp; &nbsp; }</div>\r\n<div>}</div>\r\n</div>",
            'expected_result' => "<p dir=\"ltr\">round: 1</p>\r\n<p dir=\"ltr\">round: 2</p>\r\n<p dir=\"ltr\">round: 3</p>\r\n<p dir=\"ltr\">round: 4</p>\r\n<p dir=\"ltr\">round: 5</p>\r\n<p dir=\"ltr\">round: 6</p>\r\n<p dir=\"ltr\">round: 7</p>\r\n<p dir=\"ltr\">round: 8</p>\r\n<p dir=\"ltr\">round: 9</p>\r\n<p dir=\"ltr\">round: 10</p>\r\n<p>&nbsp;</p>",
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
        $question3 = Question::create([

            'question_name' => 'LOOP3',
            'question' => "<div>\r\n<div>using System;</div>\r\n<div>public class Program</div>\r\n<div>{</div>\r\n<div>&nbsp; &nbsp; public static void Main()</div>\r\n<div>&nbsp; &nbsp; {</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; int [1] ;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; do{</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(\"round: \"+ [2] );</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; count++;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; }while( [3] );</div>\r\n<div>&nbsp; &nbsp; }</div>\r\n<div>}</div>\r\n</div>",
            'expected_result' => "<p dir=\"ltr\">round: 1</p>\r\n<p dir=\"ltr\">round: 2</p>\r\n<p dir=\"ltr\">round: 3</p>\r\n<p dir=\"ltr\">round: 4</p>\r\n<p dir=\"ltr\">round: 5</p>\r\n<p dir=\"ltr\">round: 6</p>\r\n<p dir=\"ltr\">round: 7</p>\r\n<p dir=\"ltr\">round: 8</p>\r\n<p dir=\"ltr\">round: 9</p>\r\n<p dir=\"ltr\">round: 10</p>\r\n<p>&nbsp;</p>",
            'collection' => 'LOOP'
            // 'ARRAY',

        ]);
        Answer::create([
            'question_id' => $question3->id,
            'answer' => "count=1",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question3->id,
            'answer' => "count",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question3->id,
            'answer' => "count<=10",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question3->id,
            'answer' => "count=0",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question3->id,
            'answer' => "count++",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question3->id,
            'answer' => "count--",
            'answer_status' => 'INCORRECT'
        ]);

        // Question4
        $question4 = Question::create([

            'question_name' => 'LOOP4',
            'question' => "<div>\r\n<div>using System; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>\r\n<div>public class Program</div>\r\n<div>{</div>\r\n<div>&nbsp; &nbsp; public static void Main()</div>\r\n<div>&nbsp; &nbsp; {</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; //Declare variables</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; int num=0, first=0,last=0;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; // Input number from user</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; Console.Write(\"Enter any number: \");</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; num =int.Parse(Console.ReadLine());</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; first = [1];</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; // Remove last digit from number till only one digit is left</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; while( [2] )</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; {</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; first = [3];</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; } &nbsp; &nbsp; &nbsp;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(\"First digit = {0}\", first);</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; // Find last digit</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; last = num % 10;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(\"Last digit = {0}\", last); &nbsp; &nbsp;</div>\r\n<div>&nbsp; &nbsp; }</div>\r\n<div>}</div>\r\n</div>",
            'expected_result' => "<p dir=\"ltr\">Enter any number: 123456</p>\r\n<p dir=\"ltr\">First digit&nbsp; = 1</p>\r\n<p dir=\"ltr\">Last digit = 6</p>\r\n<p>&nbsp;</p>",
            'collection' => 'LOOP'
            // 'ARRAY',

        ]);
        Answer::create([
            'question_id' => $question4->id,
            'answer' => "num",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question4->id,
            'answer' => "first>=10",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question4->id,
            'answer' => "first / 10",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question4->id,
            'answer' => "first>10",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question4->id,
            'answer' => "first % 10",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question4->id,
            'answer' => "last",
            'answer_status' => 'INCORRECT'
        ]);


        // Question1 ARRAY
        $question_array1 = Question::create([

            'question_name' => 'ARRAY1',
            'question' => "<div>\r\n<div>using System; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>\r\n<div>public class Program</div>\r\n<div>{</div>\r\n<div>&nbsp; &nbsp; public static void Main(String[] args) {</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; //Array initialization</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; int[] arr = {5,2,9,4,6,3,1,8,7};</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; int [1];</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; //Process</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; for(int i=0;i&lt;arr.Length; [2] ){</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sum = sum + [3];</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; }</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; //Output</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; Console.Write(\"Sum = \"+sum);</div>\r\n<div>&nbsp; &nbsp; } &nbsp;</div>\r\n<div>}</div>\r\n</div>",
            'expected_result' => "<p><strong id=\"docs-internal-guid-06d3eca6-7fff-3b05-f837-50b5179b5704\">Sum = 45</strong></p>",
            'collection' => 'ARRAY'
            // 'ARRAY',

        ]);
        Answer::create([
            'question_id' => $question_array1->id,
            'answer' => "sum=0",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array1->id,
            'answer' => "i++",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array1->id,
            'answer' => "arr[i]",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array1->id,
            'answer' => "arr[i+1]",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array1->id,
            'answer' => "i--",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array1->id,
            'answer' => "sum=10",
            'answer_status' => 'INCORRECT'
        ]);


        // Question2 ARRAY
        $question_array2 = Question::create([

            'question_name' => 'ARRAY2',
            'question' => "<p dir=\"ltr\">public static void Main()&nbsp;</p>\r\n<p dir=\"ltr\">{</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; int[] arr = {10, 15, 5, 50}</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; Mystery(arr);</p>\r\n<p dir=\"ltr\">}</p>\r\n<p dir=\"ltr\"><br>public static void Mystery(int[] arr)</p>\r\n<p dir=\"ltr\">{</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; double [1];</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; for (int i = 0; i &lt; arr.length; i++)</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; {</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; output = output + [2];</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; }</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; Console.Write( [3] / arr.length);</p>\r\n<p dir=\"ltr\">}</p>\r\n<p>&nbsp;</p>",
            'expected_result' => "<p><strong id=\"docs-internal-guid-973b13c1-7fff-54b1-974b-3f19e22dd275\">20</strong></p>",
            'collection' => 'ARRAY'
            // 'ARRAY',
        ]);
        Answer::create([
            'question_id' => $question_array2->id,
            'answer' => "output=0",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array2->id,
            'answer' => "arr[i]",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array2->id,
            'answer' => "output",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array2->id,
            'answer' => "arr",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array2->id,
            'answer' => "output=2",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array2->id,
            'answer' => "arr[i+2]",
            'answer_status' => 'INCORRECT'
        ]);


        // Question3 ARRAY
        $question_array3 = Question::create([

            'question_name' => 'ARRAY3',
            'question' => "<p dir=\"ltr\">public static void Main()&nbsp;</p>\r\n<p dir=\"ltr\">{</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; [1] arr2D = new [2] {{1,2,3,4}, {4,3,2,1}, {7,8,9,0}};</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; for(int row=0; row&lt;arr2D.GetLength(0);row++)</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; {</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; for(int col=0; col&lt;arr2D.GetLength(1);col++)</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; {</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.Write( [3] + \" \");</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; }</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine();</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; }</p>\r\n<p dir=\"ltr\">}</p>\r\n<p>&nbsp;</p>",
            'expected_result' => "<p dir=\"ltr\">1&nbsp;2&nbsp;3&nbsp;4&nbsp;<br>4&nbsp;3&nbsp;2&nbsp;1&nbsp;<br>7&nbsp;8&nbsp;9&nbsp;0</p>\r\n<p>&nbsp;</p>",
            'collection' => 'ARRAY'
            // 'ARRAY',
        ]);
        Answer::create([
            'question_id' => $question_array3->id,
            'answer' => "int[,]",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array3->id,
            'answer' => "int[3,4]",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array3->id,
            'answer' => "arr2D[row,col]",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array3->id,
            'answer' => "int[2,3]",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array3->id,
            'answer' => "int[]",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array3->id,
            'answer' => "arr2D[col,row]",
            'answer_status' => 'INCORRECT'
        ]);

        // Question4 ARRAY
        $question_array4 = Question::create([

            'question_name' => 'ARRAY4',
            'question' => "<div>\r\n<div>using System; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>\r\n<div>public class Program</div>\r\n<div>{</div>\r\n<div>&nbsp; &nbsp; public static void Main(String[] args)</div>\r\n<div>&nbsp; &nbsp; {</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; //declare variable</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; int evenNum=0, oddNum=0;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; [1] num = {5, 7, 2, 4, 9, 10, 11, 20, 32};</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; //Process and Output</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; Console.Write(\"All number: [\");</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; foreach(int a in [2] ){</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Console.Write(a+\" \");</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if([3] ==0){</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; evenNum =evenNum + 1;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }else{</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; oddNum = oddNum + 1;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; }</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; Console.Write(\"]\");</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine();</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(\"Number of even number : \" + evenNum);</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; Console.WriteLine(\"Number of odd number : \" + oddNum); &nbsp;</div>\r\n<div>&nbsp; &nbsp; } &nbsp;</div>\r\n<div>}</div>\r\n</div>",
            'expected_result' => "<p dir=\"ltr\">All number: [ 5, 7, 2, 4, 9, 10, 11, 20, 32 ]</p>\r\n<p dir=\"ltr\">Number of even number : 5</p>\r\n<p dir=\"ltr\">Number of odd number : 4</p>\r\n<p>&nbsp;</p>",
            'collection' => 'ARRAY'
            // 'ARRAY',
        ]);
        Answer::create([
            'question_id' => $question_array4->id,
            'answer' => "int[]",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array4->id,
            'answer' => "num",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array4->id,
            'answer' => "a%2",
            'answer_status' => 'CORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array4->id,
            'answer' => "int[,]",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array4->id,
            'answer' => "int",
            'answer_status' => 'INCORRECT'
        ]);
        Answer::create([
            'question_id' => $question_array4->id,
            'answer' => "n%2",
            'answer_status' => 'INCORRECT'
        ]);



        // Question::factory()->count(30)->create();
    }
}
