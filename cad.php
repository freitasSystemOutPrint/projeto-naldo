<?php
extract($_POST);
$nome = isset($_POST['nome']) ?$_POST['nome']: 'ERRO NOME       ';
$sobr = isset($_POST['sobr']) ?$_POST['sobr']: 'ERRO SOBRE      ';
$data = isset($_POST['data']) ?$_POST['data']: 'ERRO DATA       ';
$comu = isset($_POST['comu']) ?$_POST['comu']: 'ERRO COMUNIDADE ';

switch($comu){
    case 1:
        $comu = "ADMINISTRAÇÃO";
        break
    case 2:
        $comu = "Analise Desenv. Sistemas";
        break
    case 3:
        $comu = "";
}



    switch (variable) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;

echo "$nome <br> 
      $sobr <br>
      $data <br>
      $comu <br>
";
?>