
<DOCTYPE html>
<html>
    <head>
       <title>Formulario 2</title>
	   <meta charset="utf-8">
	   <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>

    <form method="post">                      
    	<h1>EMPLEADOS</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
        <input type="text" name="edad" placeholder="Edad">
    	<input type="submit" value="Registrar" name="register">
        <input type="submit" value="Actualizar" name="btn_actualizar">
        <input type="submit" value="Eliminar" name="btn_eliminar">
    </form>
        <?php 
        include("Insercion.php");
        ?>
    <table>
		<tr>
			<th>nombre</th>
			<th>apellido</th>
			<th>edad</th>
			<th>correo</th>
		</tr>
		<?php
			$consulta = "SELECT * FROM informacion";
			$ejecutarConsulta = mysqli_query($enlace, $consulta);
			$verFilas = mysqli_num_rows($ejecutarConsulta);
			$fila = mysqli_fetch_array($ejecutarConsulta);

			if(!$ejecutarConsulta){
				echo"Error en la consulta";
			}else{
				if($verFilas<1){
					echo"<tr><td>Sin registros</td></tr>";
				}else{
					for($i=0; $i<=$fila; $i++){
						echo'<tr>
							<td>'.$fila[0].'</td>
							<td>'.$fila[1].'</td>
							<td>'.$fila[2].'</td>
							<td>'.$fila[3].'</td>
						</tr>';
						$fila = mysqli_fetch_array($ejecutarConsulta);
						}
					}
				}
		?>						
	</table>
</body>
</html>