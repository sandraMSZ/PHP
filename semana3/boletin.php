<?php
$nombre=$_POST["nomb"];
$curso=$_POST["curso"];
$nota1=$_POST["nota1"];
$nota2=$_POST["nota2"];
$nota3=$_POST["nota3"];
//calcular nota definitiva//
$definitiva=($nota1+$nota2+$nota3)/3;
//evaluacion de la observacion de nota final
if ($definitiva>=3){
    $onserva="aprobado";
}else{
    $observa="reprobo";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="text-align: center;">
        <img src="./img/incap.png" alt=""   width="150" height="150"/> 
        <h1>BOLETIN OFICIAL DE NOTAS </h1>
    </div>
    <br><br>
    <form  method="post">
        <table border="2" width="80%">
            <tr><th>NOMBRE:</th><td><input type="text" value="<?php echo $nombre ?>" size="30"></td></tr>
            <tr><th>CURSO:</th><td><input type="text" value="<?php echo $curso ?>" size="30"></td></tr>
            <tr><th>NOTA1:</th><td><input type="text" value="<?php echo $nota1 ?>" size="10"></td></tr>
            <tr><th>NOTA2:</th><td><input type="text" value="<?php echo $nota2 ?>" size="30"></td></tr>
            <tr><th>NOTA3:</th><td><input type="text" value="<?php echo $nota3 ?>" size="30"></td></tr>
            <tr><th>DEFINITIVA:</th><td><input type="text" value="<?php echo round($definitiva,2) ?>" size="10" disabled></td></tr>
            <tr><th>OBSERVACION:</th><td><input type="text" value="<?php echo $observa ?>" size="10" disabled></td></tr>
            
        </table>
    </form>
</body>
</html>