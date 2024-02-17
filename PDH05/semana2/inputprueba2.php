<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATOS TRASFERIDOS DEL  FORMULARIO</h1>
    <?php
    //VIENE DE FORMA LOGIN.PHP ---TRASFERIENCIA DE DATOS
    ECHO "EL USUARIO INGRESADO ES ...";
    ECHO  "<br>";
    echo $_POST['username']; // datos proviene del formulario
    ?>
</body>
</html>