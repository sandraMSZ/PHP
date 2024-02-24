<?php
if ($_POST){
    //DATOS trasferidos del formulario taller deporte.html//
    $peso=$_POST["peso"];
    $altura=$_post["altura"];
    $nombre=$_post["nombre"];
    $edad=$_post["edad"];
    //proceso de evaluaccion de condicional//
    if ($peso>=80 && $altura>=1.80 && $edad>=18){
        echo "estudiante...".$nombre."es aceptado en equipo de Basketball"."<br>";
        
    }else{
        "estudiante...".$nombre."...no cumple requisitos para equipo de Basketball"."<br>";
    }
}
?>