<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContatoEmail;
use App\Mail\ContatoElogio;
use App\Mail\ContatoConfirma;


class ContatoController extends Controller
{
    public function enviaContato(Request $request)
	{
		$remetente = $request->email
		
		Mail::to('lucasalmeidacco@gmail.com')->send(new ContatoEmail($request));
		
		if(empty($request->elogio))
		{
			
		}else{
			Mail::to('lucasalmeidacco@gmail.com')->send(new ContatoElogio($request));
		}
		
<<<<<<< HEAD
		Mail::to($remetente)->send(new ContatoConfirma($request));
=======
		Mail::to($remetende)->send(new ContatoConfirma($request));
>>>>>>> 1dd4bf0693d58ead115a1661cb4aa2fef6244f0a
		
	}
}
