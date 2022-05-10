<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escreva um programa</title>
    <style>
        body {background-color: powderblue;
                width: 100vw;
                height: 100vh;
              display:flex;
              flex-direction:row;
              justify-content: center;
              align-items: center;}

              form{
                width: 100vw;
                height: 100vh;
                display:flex;
              flex-direction:column;
              justify-content: center;
              align-items: center;}
</style>
</head>
<body>
    <form>
<h1>Sorteio de 20 Números entre 1 e 10.
</h1>


<?php

for ($i=1; $i < 21; $i++) { 
    $sorteio=mt_rand( 1, 10);
    $arr[]=$sorteio;
}
echo ("Array sorteado: ");echo json_encode($arr); echo("<br>");

$conteudo=array_count_values($arr);
$resultado=array();
foreach($conteudo as $k => $v){
    if ($v===1) $resultado[]=$k;
};
echo ("Os números que não se repetem são: ");echo json_encode($resultado);


?>
</form>
</body>
</html>