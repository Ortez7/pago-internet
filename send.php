<?php
include("conexion.php");
if(isset($_POST['send'])) {
    if(
        strlen($_POST['identity']) >= 1 &&
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['device']) >= 1 
    ){
        $identity = trim($_POST['identity']);
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $device = trim($_POST['device']);
        $consulta = "INSERT INTO docentes (Id, Nombre, Telefono, Dispositivo)
                    VALUES ('$identity', '$name', '$phone', '$device')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            ?>
                <h3 class="success">Tu registro se a completado</h3>
            <?php
        }else{
            ?>
                <h3 class="error">Ocurrio un error</h3>
            <?php
        }
    }else{
        ?>
            <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}
?>

