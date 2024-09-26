<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "basededatos";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}


$enero = $_POST['enero'];
$febrero = $_POST['febrero'];
$marzo = $_POST['marzo'];
$abril = $_POST['abril'];
$mayo = $_POST['mayo'];
$junio = $_POST['junio'];
$julio = $_POST['julio'];
$agosto = $_POST['agosto'];
$septiembre = $_POST['septiembre'];
$octubre = $_POST['octubre'];
$noviembre = $_POST['noviembre'];
$diciembre = $_POST['diciembre'];


$sql = "INSERT INTO meses (enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre, noviembre, diciembre) VALUES ('$enero', '$febrero', '$marzo', '$abril', '$mayo', '$junio', '$julio', '$agosto', '$septiembre', '$octubre', '$noviembre', '$diciembre')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();
?>