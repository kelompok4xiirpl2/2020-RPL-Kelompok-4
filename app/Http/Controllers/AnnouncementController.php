<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
	public function index()
	{
		$data = \App\Announcement::all();
		return view('layouts.dashboard', compact('data'));
	}
    
}
