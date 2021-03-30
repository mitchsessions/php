<html>

    <head><title>Nuevo Usuario</title></head>
		<body>

			<?php
				header('Content-type: text/html; charset=utf-8');  // Esta sentencia es para que se acepten los acentos y la ñ.
				$link = mysqli_connect("localhost","admin","1234","base1"); 
				
				mysqli_query($link,"SET NAMES 'utf8'"); 
				
				$contador=0;
				
				if (strlen($_POST['nombre']) != 0 ){
					++$contador;
				}
				else
					echo "El nombre no puede estar vacio <br> ";
				
				if (strlen($_POST['apellido']) != 0 ){
					++$contador;
				}
				else
					echo "El apellido no puede estar vacio <br> ";
				
				
				if (strlen($_POST['email']) != 0 ){
					++$contador;
				}
				else
					echo "El email no puede estar vacio <br> ";
				
				if (strlen($_POST['clave']) != 0 ){
					++$contador;
				}
				else
					echo "La clave no puede estar vacio <br> ";
				
				if (strlen($_POST['tel']) != 0 ){
					++$contador;
				}
				else
					echo "El telefono no puede estar vacio <br> ";
				
				if($contador==5){
					$nombre = $_POST['nombre'];
					$apellido = $_POST['apellido'];
					$email = $_POST['email'];
					$clave = $_POST['clave'];
					$telefono = $_POST['tel'];
					
					$resultado = mysqli_query($link, " INSERT INTO AGENDA (nombre,apellido,email,telefono) values ('$nombre','$apellido','$email','$telefono')");
					
					$index = mysqli_query($link, "select id from agenda where email='$email'");
					$temp = mysqli_fetch_row($index);
					$id = $temp[0];
					$resultado = mysqli_query($link, "insert into claves (id,clave) values ('$id','$clave')");
					
				}
				
				
				
			?>
	</body>

</html>