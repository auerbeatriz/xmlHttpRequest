<?php
//configiração de acesso ao banco de dados

$servername = "localhost";
$dbname = "horario";
$username = "root";
$password = "usbw";

$con = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($con, "utf8");

if(mysqli_connect_error()) {
    echo "Falha na conexão: " .mysqli_connect_error();
}

?>