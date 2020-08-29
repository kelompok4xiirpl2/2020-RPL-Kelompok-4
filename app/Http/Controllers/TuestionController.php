<?php

namespace App\Http\Controllers;

use App\cr;
use Illuminate\Http\Request;
use App\Question;

class TuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tuestion = Question::
         join('users','users.id','=','questions.id_users')->
         join('classes','classes.id','=','users.id_class')->
         select('users.name','questions.*','classes.class_name')->
         get();
        return view('question.tablequestion', compact('tuestion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data=\App\Question::whereId($id)->first();
        return view('question.answer',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $question= \App\Question::whereId($id)->first();
        $question->answer=$request->answer;
        $question->update();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }



     public function detail_answer($id)
    {
         $question= \App\Question::whereId($id)->first();
        return view('question.viewanswer',['data'=>$question]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }



     public function delete($id)
    {
        $data=\App\Question::whereId($id)->first();
        $data->delete();
        return redirect('/question/table');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
