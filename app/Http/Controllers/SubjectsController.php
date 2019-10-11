<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectsController extends Controller
{
    public function index()
    {
    	$subjects = Subject::all();
    	return view('subjects.index')->with('subjects', $subjects);
    }

    public function create()
    {
    	return view('subjects.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
        ]);
        
    	$subject = new Subject;
    	$subject->name = request()->name;
    	$subject->save();

    	return redirect('/subjects');
    }
}