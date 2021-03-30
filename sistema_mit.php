<html>
    <meta charset="UTF-8"> 
    <head><title>Sistema Mit</title></head>
    <body>
        <form action="infomit.php" method="POST" id="entrada_datos">
		<pre><h3 align='left'><b>Usuario: <INPUT TYPE="text" name="usuario" SIZE=20 MAXLENGTH=25>		Password: <INPUT TYPE="password" NAME="clave" SIZE=12 MAXLENGTH=20>
         
		</h3></pre>    
         <h2 align='center'> <INPUT TYPE="submit" VALUE="Acceder">	</h2>
          
			
           
           	

			  Marque si olvidó su contraseña <INPUT TYPE="checkbox" NAME="olvido" VALUE="Desactivada" >
            <BR>
           
        </form>
		<br>
		<b> Nuevo Usuario 
		<br>
		<br>
		<form action="nuevoUsuario.php" method="POST" id="botonNuevoUsuario">
			 Nombre: <INPUT TYPE="text" name="nombre" SIZE=20 MAXLENGTH=25>
            <BR>
            <BR>
			 
			 Apellido: <INPUT TYPE="text" name="apellido" SIZE=20 MAXLENGTH=25>
            <BR>
            <BR>
			 
			 Email: <INPUT TYPE="text" name="email" SIZE=22 MAXLENGTH=25>
            <BR>
            <BR>
			
            Password: <INPUT TYPE="password" NAME="clave" SIZE=15 MAXLENGTH=20>
            <BR>
            <BR>
			
			 Tel: <INPUT TYPE="text" name="tel" SIZE=20 MAXLENGTH=25>
            <BR>
            <BR>
			
			<INPUT TYPE="submit" name='nuevo' VALUE='Crear Usuario'>
		
		</form>
		
    </body>
</html> 