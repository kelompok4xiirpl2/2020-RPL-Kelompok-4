<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $role=\App\User::join('roles','roles.id','=','users.role_id')->select('roles.name')->where('users.id','=',auth()->user()->id)->first();
        if ($role->name=='admin') {
        $data = Announcement::join('classes','announcements.class_id','=','classes.id')
                ->join('teachers','announcements.teacher_id','=','teachers.id')
                ->join('subjects','subjects.id','=','announcements.subject_id')
                ->select('announcements.id','announcements.title','announcements.description',
                         'classes.class_name','announcements.created_at','teachers.teacher_name','subjects.name')
                ->get();
        return view('pages.admins.dashboard', compact('data'));    # code...
        }else{
            return redirect('/students');
        }
        
    }
}
