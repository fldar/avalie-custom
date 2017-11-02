<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviaContato(Request $request)
	{
		dd($request->all());
	}
}
