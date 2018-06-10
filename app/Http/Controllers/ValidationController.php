<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ValidationController extends Controller
{
    public function create()
    {
    	return view('validate.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'username' => 'required|unique:posts|max:255',
        'password' => 'required',
    	]);
    }
}
