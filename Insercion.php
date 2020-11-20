<?php
include("database.php");

if(isset($_POST['regiter'])){
    if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1){
       $name = trim($_POST['name']);
       $email = trim($_POST['email']);
       $edad = trim($_POST["edad"]);
       $consulta = "SELECT * FROM informacion(id, nombre, email, edad) VALUES ('$name','$email','$edad')";
       $resultado = mysql_query($conex,$consulta);
       if(resultado){
          ?>
          <h3 class = "ok"> Registro completado </h3>
          <?php}       
        else{
          ?>
          <h3 class = "bad"> Error en la conexion o el registro </h3>
          <?php
        }    
     }
     else{
        ?>
        <h3 class = "bad"> No se ha completado el registro </h3>
        <?php
     }
}
?>