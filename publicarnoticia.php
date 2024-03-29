<?php

$servidor="localhost";
$usuario="root";
$senha="";
$banco="projectofinal";

$conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

$sql = "SELECT titulo,foto,sms FROM noticias ORDER BY idnoticias DESC limit 2";

$resultado = mysqli_query($conecta, $sql);

if(!$resultado){
    die("Falha na consulta ao banco!");
}


?>
