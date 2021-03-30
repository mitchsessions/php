<html>

	
    <head><title>Ejemplo de formulario info</title></head>
		<body>

			<?php
				header('Content-type: text/html; charset=utf-8');  // Esta sentencia es para que se acepten los acentos y la ñ.
				echo "La ciudad es " . $_POST['ciudad'];
				echo "<br>";
				echo "La clave es " . $_POST['clave'];
				echo "<br>";
				echo "La música elegida es " . $_POST['musica'];
				echo "<br>";
				echo "Tu opción de publicidad es " . $_POST['publi'];
				echo "<br>";
				echo "El campo oculto tiene el valor " . $_POST['identificador'];
				echo "<br>";
				echo "La caja de texto tiene este contenido: " . $_POST['comentario'];
				echo "<br>";
				echo "La provincia elegida es: " . $_POST['provincia'];
			?>
	</body>

</html>