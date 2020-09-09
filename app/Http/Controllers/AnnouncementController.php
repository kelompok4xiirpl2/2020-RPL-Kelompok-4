<?php

namespace App\Http\Controllers;

use App\cr;
use Illuminate\Http\Request;
use App\Classes;
use App\Announcement;
use App\Teacher;
use App\Subject;
use App\User;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Announcement::join('classes','announcements.class_id','=','classes.id')
                ->join('teachers','announcements.teacher_id','=','teachers.id')
                ->join('subjects','subjects.id','=','announcements.subject_id')
                ->select('announcements.id','announcements.title','announcements.description',
                         'classes.class_name','announcements.created_at','teachers.teacher_name','subjects.name')
                ->get();
                // dd($data);
                 $user= User::join ('roles','roles.id','=','Users.role_id')->
           select('roles.name')->
        where('users.id','=',Auth()->user()->id)->first();

            if ($user->name == "admin") {
                   return view('pages.admins.dashboard', compact('data'));
         }
         else  {
                return view('pages.students.announcementlist', compact('data'));
         }





     
    }

    public function detail($id)
    {
        $detail = Announcement::find($id)
                ->join('teachers', 'announcements.teacher_id','=','teachers.id')
                ->join('subjects', 'announcements.subject_id','=','subjects.id')
                ->select('teachers.teacher_name','announcements.title','subjects.name','announcements.description')
                ->where('announcements.id','=',$id)
                ->first();


                 $user= User::join ('roles','roles.id','=','Users.role_id')->
           select('roles.name')->
        where('users.id','=',Auth()->user()->id)->first();

            if ($user->name == "admin") {
                   return view('pages.admins.detail',['data'=>$detail]);
         }
         else  {
                return view('pages.students.detail', ['data'=>$detail]);
         }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class     = Classes::all();
        $class_id  = Classes::first()->id;

        $teacher    = Teacher::all();
        $teacher_id = Teacher::first()->id;

        $subject    = Subject::all();
        $subject_id = Subject::first()->id;


        return view('pages.admins.create', compact('class', 'class_id', 'teacher',
                     'teacher_id', 'subject', 'subject_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Announcement();
        $post->title       = $request->input('title');
        $post->class_id    = $request->input('class_id');
        $post->teacher_id  = $request->input('teacher_id');
        $post->subject_id  = $request->input('subject_id');
        $post->description = $request->input('description'); 
        //dd($post);  
        $post->save();
        return redirect('admin/announcement');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        $data = Announcement::whereId($id)->delete();
        return redirect('admin/announcement');
    }
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject    = Subject::all();
        $subject_id = Subject::first()->id;


        $teacher    = Teacher::all();
        $teacher_id = Teacher::first()->id;
        
        $data = Announcement::whereId($id)->get();
        return view('pages.admins.edit',compact('data', 'subject','subject_id', 'teacher','teacher_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $data = Announcement::whereId($id)->first();
        $data->update($request->except(['_token']));
        return redirect('admin/announcement');
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
