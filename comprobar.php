<html>
	<meta charset="UTF-8"> 
	<head>
		<title>Comprobación de datos </title>
	</head>
	<body>
		<?php
			header('Content-type: text/html; charset=utf-8');  // Esta sentencia es para que se acepten los acentos y la ñ.
			echo "Nombre :" . $_POST['nombre'];
			echo "<br>";
			echo "Apellidos :" . $_POST['apellidos'];
			echo "<br>";
			echo "E-mail :" . $_POST['email'];
			echo "<br>";
			echo "Contraseña :" . $_POST['clave'];
			echo "<br>";
			
			if (isset($_POST['adelante']) ){
				
				if(!empty($_POST['sexo']))
				echo "Sexo :" . $_POST['sexo'] . "<br>";
			
			
				if (!empty($_POST['estudios']) )
				echo "Estudios :" . $_POST['estudios'] . "<br>";
		
				
				if (!empty($_POST['musica']) && isset($_post['comprobar']))
					echo "Música" .$_POST['musica'] . "<br>";
				
				
				if (!empty($_POST['deportes']) )
					echo "Deportes :" . $_POST['deportes'] . "<br>";
				
				
				if (!empty($_POST['cine']) )
					echo "Cine :" . $_POST['cine'] . "<br>";
			
				
				if (!empty($_POST['libros']) )
					echo "Libros :" . $_POST['libros'] . "<br>";
				
				
				if (!empty($_POST['ciencia']) )
					echo "Ciencia :" . $_POST['ciencia'] . "<br>";
			
			}
			echo "Día de la semana :" . $_POST['dia'];
			echo "<br>";
			echo "Comentarios :" . $_POST['comentario'];
			echo "<br>";
			
		?>
	
	</body>

</html>