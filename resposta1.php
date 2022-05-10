<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função SeculoAno($ano)</title>
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

<form action="resposta1.php" method="post">
<label for="ano">Ano de Pesquisa</label><br>
<input type="text" name="ano"><br><br>
<input type="submit"><br><br>

<!-------------------------------INÍCIO DO CÓDIGO EM PHP -------------------------------->
<!-------------------------------INÍCIO DO CÓDIGO EM PHP -------------------------------->
<?php

$seculo=1;
$inicio=1;

if (!isset($_POST['ano'])){
    $ano=1;
}
else{
$ano=$_POST['ano'];
}

while ($ano>$inicio+99) {
$seculo=$seculo+1;
$inicio=$inicio+100;
}

echo("<p>Ano inserido:"." ".$ano."</p>");
echo("<br>");
echo("Século:"." ".$seculo);

?>
<!-------------------------------Fím DO CÓDIGO EM PHP -------------------------------->
<!-------------------------------Fím DO CÓDIGO EM PHP -------------------------------->
</form>
</body>
</html>




