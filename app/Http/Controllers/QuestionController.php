<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($collection)
    {
        return view('question-add' ,  compact('collection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $collection)
    {

        return $request;
        $question = Question::create([
            'question_name' => $request->question_name,
            'question' => $request->question,
            'expected_result' => $request->expected_result,
            'collection'=> $collection,
        ]
        );
        if($request->ans ){
            foreach ($request->ans as $key => $value) {
                Answer::create([
                    'question_id' => $question->id,
                    'answer' => $value,
                    'answer_status' => 'CORRECT'
                ]);
            }
        }
        if($request->wrong_ans ){
            foreach ($request->wrong_ans as $key => $value) {
                Answer::create([
                    'question_id' => $question->id,
                    'answer' => $value,
                    'answer_status' => 'INCORRECT'
                ]);
            }
        }

        return redirect()->route('question-data', [$collection , $question->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $question = Question::where('id',$id)->with('answers')->first();
        $collection = $question->collection;
        // return $question;
        // $collection = $question->
        return view('question-edit' ,  compact('question' , 'collection'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = Question::where('id' , $id)->first();
        $question->question_name = $request->question_name;
        $question->question = $request->question;
        $question->expected_result = $request->expected_result;

        $oldAns = Answer::where('question_id' , $question->id)->delete();

        if($request->ans ){
            foreach ($request->ans as $key => $value) {
                Answer::create([
                    'question_id' => $question->id,
                    'answer' => $value,
                    'answer_status' => 'CORRECT'
                ]);
            }
        }
        if($request->wrong_ans ){
            foreach ($request->wrong_ans as $key => $value) {
                Answer::create([
                    'question_id' => $question->id,
                    'answer' => $value,
                    'answer_status' => 'INCORRECT'
                ]);
            }
        }
        $question->save();

        
        return redirect()->route('question-data', [$question->collection , $question->id]);

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();
        return redirect()->back();
    }

    public function qCollection($collection){

        $questions = Question::where('collection'  , $collection)->get();
        $question = null;

        $correct_ans = null;
        $incorrect_ans = null;
        return view('question-list' , compact('questions' ,'question', 'collection' , 'correct_ans' , 'incorrect_ans'));

    }
    public function qData($collection, $id){

        $questions = Question::where('collection'  , $collection)->get();
        $question = Question::where('collection'  , $collection)->where('id' , $id)->first();

        $correct_ans = Answer::where('question_id' , $id)->where('answer_status' , 'CORRECT')->get();
        $incorrect_ans = Answer::where('question_id' , $id)->where('answer_status' , 'INCORRECT')->get();
        return view('question-list' , compact('questions', 'question' , 'collection', 'correct_ans' , 'incorrect_ans'));

    }

    public function getQuestions(){

        $question = Question::with('answers')->get();
        return $question;
    }
    public function getQuestion($id){

        $data = [];
        $answers = [];
        $correntAnsArr = [];
        $question = Question::where('id', $id)->with('answers')->first();

        foreach ($question->answers as $answer) {
            array_push($answers , $answer->answer);
            if($answer->answer_status == "CORRECT"){
                array_push($correntAnsArr , $answer->answer);

            }
        }
        $data['maps'][] = [
            'problem' => $question->question,
            'result' => $question->expected_result,
            "itemArr" => $answers,
            "correntAnsArr" => $correntAnsArr
        ];
        return $data;
    }
}
