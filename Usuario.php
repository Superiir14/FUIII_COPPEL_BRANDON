<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
        $apellido = trim($_POST['apellido']);
	    $email = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);
	    $consulta = "INSERT INTO `usuario`(`id_Usuario`, `Nombre`, `Apellido`, `Correo`, `Telefono`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>