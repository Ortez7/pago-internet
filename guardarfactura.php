<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "basededatos";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}


$idfactura = $_POST['idfactura'];
$nombre = $_POST['nombre'];
$mes = $_POST['mes'];
$aporte = $_POST['aporte'];

$sql = "INSERT INTO factura (idfactura, nombre, mes, aporte) VALUES ('$idfactura', '$nombre', '$mes', '$aporte')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();
?>