<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Primos($inicial,$final)</title>
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

<form action="resposta2.php" method="post">
<label for="inicial">Número Inicial</label><br>  
<input type="number" name="inicial"><br><br>

<label for="final">Número Final </label><br>
<input type="number" name="final"><br><br>
<input type="submit"><br><br>

<!-------------------------------INÍCIO DO CÓDIGO EM PHP -------------------------------->
<!-------------------------------INÍCIO DO CÓDIGO EM PHP -------------------------------->
<?php
if (!isset($_POST['inicial'])) {
    $inicial=0;
}
else{$inicial=$_POST['inicial'];}


if (!isset($_POST['final'])) {
    $final=0;
}
else{$final=$_POST['final'];}


while ($inicial < $final-1) {
    $divisores=0;
    $inicial++;

    for ($contador=1; $contador<$inicial ; $contador++) { 
        
        if ($inicial % $contador == 0) {
            $divisores=$divisores+1;
        }  
    }

    if ($divisores==1) 
    $arr[]=$inicial;

    
};
if (!isset($arr)) {
    echo(" ");
}else{
echo ("Número Inicial:".$_POST['inicial']."<br>"); 
echo ("Número Final:".$final."<br>");   
echo ("Resposta: ");echo json_encode($arr);}
?>
<!-------------------------------Fím DO CÓDIGO EM PHP -------------------------------->
<!-------------------------------Fím DO CÓDIGO EM PHP -------------------------------->

</form>


    
</body>
</html>