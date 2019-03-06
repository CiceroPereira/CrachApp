<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;
use Illuminate\Support\Facades\DB;
use PDF;

class PdfController extends Controller
{
    
	public function get(Request $request){

		$participantes = Participante::all();

		$pdf = PDF::loadView('pdfGenerate', compact('participantes'));
		return $pdf->download('cracha.pdf');
	}

	public function store(Request $request){

		DB::table('participantes')->truncate();
		$participantes = $request->participantes;

		$comp = preg_split('/[\n\r]+/', $participantes);
		
		if($request->back != null){	
			$request->back->storeAs('back', '1.png');
		}

		for($i = 0; $i < sizeof($comp); $i++){
			$data = preg_split('/[\t]+/', $comp[$i]);

			if(sizeof($data)!= 5){
				return redirect()->back()->with('message', 'O formato dos dados informados estão incorretos');
			}
			$pessoa = new Participante;
			$pessoa->name = $data[0];
			$pessoa->pais = $data[1];
			$pessoa->instituicao = $data[2];
			$pessoa->email = $data[3];
			$pessoa->inscricao = $data[4];

			$pessoa->save();
		}


		return redirect('/pdf');
	//	dd($comp);
	}

}
