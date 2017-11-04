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
		
		Mail::to('sac@softcomtecnologia.com.br')->send(new ContatoEmail($request));
		
		if(empty($request->elogio))
		{
			
		}else{
			Mail::to('sac@softcomtecnologia.com.br')->send(new ContatoElogio($request));
		}
		
		echo "Agradecemos sua avaliação";
		
	}
}
