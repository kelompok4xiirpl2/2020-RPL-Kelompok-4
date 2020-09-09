<?php

namespace App\Http\Controllers;

use App\cr;
use Illuminate\Http\Request;
use App\Question;
use App\User;

class TuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tuestion = Question::join('users','questions.users_id','=','users.id')
                             ->join('classes','questions.users_id','=','classes.id')
                             ->select('users.name','classes.class_name','questions.*')
                             ->get();

           $user= User::join('roles','users.role_id','=','roles.id')
                      ->select('roles.name')
                      ->where('users.id','=',Auth()->user()->id)->first();

        return view('pages.question.tablequestion', compact('tuestion','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data=Question::whereId($id)->first();
        return view('pages.question.answer',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $question= Question::whereId($id)->first();
        $question->answer=$request->answer;
        $question->update();
        return redirect('/admin/question/table');

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
        return view('pages.students.viewanswer',['data'=>$question]);
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
        return redirect('/admin/question/table');
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
