<html>

    <head><title>Ejemplo de formulario info</title></head>
		<body>

			<?php
				header('Content-type: text/html; charset=utf-8');  // Esta sentencia es para que se acepten los acentos y la ñ.
				$link = mysqli_connect("localhost","admin","1234","base1"); 
		
				mysqli_query($link,"SET NAMES 'utf8'"); 
				
				
				if (strlen($_POST['usuario']) != 0 ){
					$temp=$_POST['usuario'];
					
					
					$resultado= mysqli_query($link,"SELECT id,email FROM agenda where email='$temp'");
			
					$registro = mysqli_fetch_row($resultado);
					
					$id_temp = $registro[0];
					$email_temp = $registro[1];
			   
					if (strcmp($temp,$email_temp)== 0){
						echo "Usuario en la base de datos " . "<br>";
						if(strlen($_POST['clave']) != 0){
						 $temp = $_POST['clave'];
						 $resultado= mysqli_query($link,"SELECT id,clave FROM claves where id='$id_temp' and clave='$temp'");
						 
						 $registro = mysqli_fetch_row($resultado);
							 
						 $clave_temp = $registro[1];
							
						if (strcmp($temp,$clave_temp)== 0)
							echo "clave de usuario correcta " . "<br>";	
						else
							echo "La claave de usuario es incorrecta" . "<br>";
						}
					}
					else
						echo "Usuario no está en la base de datos" . "<br>";
					
				}
				else
					echo "El usuario no puede estar vacio ";
				
				echo "<br>";
				
				if (ISSET ($_POST['olvido'])	) 
				echo "La opción de olvido está activada ";
				else
					echo "La opción de olvido está desactivada ";
				echo "<br>";
				
				if(	isset($_POST['nuevo'])	){
					echo "Nuevo usuario <br>";
				}
				
			?>
	</body>

</html>