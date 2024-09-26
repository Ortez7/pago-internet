<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>

    <form method="post" autocomplete="off">
        <h2>Docentes</h2>
    <div class="input-group">
        <div class="input-container">
                <input type="text" name="identity" placeholder="Id">
        </div>
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre">
            </div>
                <div class="input-container">
                <input type="text" name="phone" placeholder="Telefono">
                </div>
                <div class="input-container">
                <input type="text" name="device" placeholder="Dispositivo">
                </div>
                <a href="#">Terminos y Condiciones</a>
                <input type="submit" name="send" class="btn" value="Enviar">
               <br>
                <center>

    
    <td><a href="inicio.php">ATRAS</a><td> 
	<td><a href="mes.php">SIGUIENTE</a><td> 
    </div>
    </form>
<?php 
include("send.php");
?>

</body>
</html>	