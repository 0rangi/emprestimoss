<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCalculo extends Controller
{
    public function Calcular(Request $request)
{
$capital = $request->input('capital');
 $taxa = $request->input('taxa');
  $periodo = $request->input('periodo');
   $juros = $taxa / 100;
    
   
    $mes = 1;
   $dados = array();

for($p= $periodo; $p >= 1; $p--){
   
    $capital=($capital+($capital * $juros));
    $parcela =($capital/$p);
    
    $dados[$i]['mes'] = $mes; 
    $dados[$i]['totalAPagar'] = number_format($capital, 2,',' , '.');
    $dados[$i]['parcela'] = number_format($parcela , 2, ',' , '.');

$capital = ($capital - $parcela);
    $mes=$mes+1;
     $totalPago=$totalPago+$parcela;
}

 $dados[$i]['totalPago'] = number_format($totalPago , 2, ',' , '.');


return view('resposta', compact('dados'));

}
}