<html>
	<meta charset="UTF-8"> 
	<head>
		<title>Mi formulario </title> 
	</head>
	<body>
		<b><H1 align="center"> Suscripción electrónica a nuestro boletín. </H1></b>
		<br>
		<H3> Nota: Este es un formulario de ejemplo en el que los datos escritos aquí se trasladan a otra página. </H3>
		<br>
	
		 <form action="comprobar.php" method="POST" id="entrada_datos">
				Nombre : <INPUT TYPE="text" name="nombre" SIZE=16 MAXLENGTH=20>
				Apellidos : <INPUT TYPE="text" name="apellidos" SIZE=24 MAXLENGTH=30>
				E-mail : <INPUT TYPE="text" name="email" SIZE=24 MAXLENGTH=30>
				<BR>
				<br>
				Password: <INPUT TYPE="Contraseña" NAME="clave" SIZE=12 MAXLENGTH=20>
				<BR>
				<BR>
				
				<pre>Sexo :			Nivel de estudios : 			Interesado en los siguientes temas : 
				<BR><INPUT TYPE="radio" NAME="sexo" VALUE="varon" checked>Varón		<INPUT TYPE="radio" NAME="estudios" VALUE="certificado escolar" checked>Certificado escolar 			<INPUT TYPE="checkbox" NAME="musica" VALUE="si" >Música
				<BR><INPUT TYPE="radio" NAME="sexo" VALUE="mujer">Mujer		<INPUT TYPE="radio" NAME="estudios" VALUE="graduado en E.S.O.">Graduado en E.S.O. 			<INPUT TYPE="checkbox" NAME="deportes" VALUE="si" >Deportes		
				<br>			<INPUT TYPE="radio" NAME="estudios" VALUE="bachiller-formación profesional">Bachiller - formación profesional 	<INPUT TYPE="checkbox" NAME="cine" VALUE="si" >Cine
				<br>			<INPUT TYPE="radio" NAME="estudios" VALUE="diplomado">Diplomado 				<INPUT TYPE="checkbox" NAME="libros" VALUE="si" >Libros
				<br>			<INPUT TYPE="radio" NAME="estudios" VALUE="licencuado o doctorado">Licenciado o Doctorado 		<INPUT TYPE="checkbox" NAME="ciencia" VALUE="si" >Ciencia
				</pre>
				
				
				
				
				<BR>
				<BR>
				
				Día de la semana que le interesa recibirlo :
				<BR>
				<SELECT NAME="dia">
					<OPTION VALUE="Lunes" CHECKED>Lunes
					<OPTION VALUE="Martes">Martes
					<OPTION VALUE="Miércoles">Miércoles
					<OPTION VALUE="Jueves">Jueves
					<OPTION VALUE="Viernes">Viernes
					
				</SELECT>
				
				<br>
				<br>
				
				Su opinión :
				<BR>
				<TEXTAREA NAME="comentario" COLS="60" ROWS="4">
				</TEXTAREA>
				<BR>
				<BR>
				
				<BR>
				<BR>
				<pre>
				<INPUT TYPE="submit" name='adelante' VALUE="Comprobar el formulario">		<INPUT type="reset" value="Borrar">
				</pre>
				

			</form>

	
	</body>


</html>