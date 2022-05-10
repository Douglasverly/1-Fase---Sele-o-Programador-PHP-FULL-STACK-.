<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função SequenciaCrescente($array)</title>
    <style>
        body {background-color: powderblue;
                width: 100vw;
                height: 100vh;
              display:flex;
              flex-direction:column;
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
    

<?php
$arrays=array(
    array(1, 3, 2, 1),
    array(1, 3, 2),
    array(1, 2, 1, 2),
    array(3, 6, 5, 8, 10, 20, 15),
    array(1, 1, 2, 3, 4, 4),
    array(1, 4, 10, 4, 2),
    array(10, 1, 2, 3, 4, 5),
    array(1, 1, 1, 2, 3),
    array(0, -2, 5, 6),
    array(1, 2, 3, 4, 5, 3, 5, 6),
    array(40, 50, 60, 10, 20, 30),
    array(1, 1),
    array(1, 2, 5, 3, 5),
    array(1, 2, 5, 5, 5),
    array(10, 1, 2, 3, 4, 5, 6, 1),
    array(1, 2, 3, 4, 3, 6),
    array(1, 2, 3, 4, 99, 5, 6),
    array(123, -17, -5, 1, 2, 3, 12, 43, 45),
    array(3, 5, 67, 98, 3),

);
echo("<h2>Função SequenciaCrescente</h2>");
foreach($arrays as $array1){
    $erros_crescente=0;
    $ultimo_valor=0;
    $controle= -999999999;
    $valorinicial=0;
    

foreach($array1 as $v ){

    if ($v>$controle) {
    $ultimo_valor=$controle;    
    $controle=$v;
    }
    elseif ($v<$controle) {

    if ($valorinicial==1) {
        $controle=$v;
        $erros_crescente++;
        $valorinicial++;
    }elseif ($ultimo_valor<$v) {
        $controle=$v;
        $erros_crescente++;
    }
    else{
    $erros_crescente++;
    }

    }
    elseif ($v==$controle) {
    $erros_crescente++;
    }

    $valorinicial++;

};

if ($erros_crescente<=1) {
    echo json_encode($array1);echo("True");
};

if ($erros_crescente>1) {
    echo json_encode($array1);echo("False"); 
};
echo("<br>");
};
?>
</body>
</html>