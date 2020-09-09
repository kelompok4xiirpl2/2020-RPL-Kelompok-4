<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\Announcement;

class SiswaController extends Controller
{
    public function index()
    {
    	$data = Announcement::join('classes','announcements.class_id','=','classes.id')
                ->join('teachers','announcements.teacher_id','=','teachers.id')
                ->join('subjects','subjects.id','=','announcements.subject_id')
                ->select('announcements.id','announcements.title','announcements.description',
                         'classes.class_name','announcements.created_at','teachers.teacher_name','subjects.name')
                ->get();
    	return view('pages.students.announcementlist',compact('data'));
    }
    public function i()
    {
    	$data = \App\Announcement::all();
		return view('pages.students.announcementlist', compact('data'));
    }
}
  