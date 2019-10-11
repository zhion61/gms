<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Strand;

class StrandsController extends Controller
{
    public function index()
    {
    	$strands = Strand::all();
    	return view('strands.index')->with('strands', $strands);
    }

    public function create()
    {
    	return view('strands.create');
    }

    public function store()
    {
        request()->validate([
            'id' => 'required',
            'name' => 'required'
        ]);
        
    	$strand = new Strand;
    	$strand->id = request()->id;
    	$strand->name = request()->name;
    	$strand->save();

    	return redirect('/strands');
    }
}