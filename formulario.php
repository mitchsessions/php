<html>
    <meta charset="UTF-8"> // Esta sentencia es para que se acepten los acentos y la ñ.
    <head><title>Ejemplo de formulario</title></head>
    <body>
        <form action="procesar.php" method="POST" id="entrada_datos">
            Nombre de la ciudad: <INPUT TYPE="text" name="ciudad" SIZE=8 MAXLENGTH=20>
            <BR>
            <BR>
            Password: <INPUT TYPE="password" NAME="clave" SIZE=8 MAXLENGTH=20>
            <BR>
            <BR>
            Tipo de música:
            <BR><INPUT TYPE="radio" NAME="musica" VALUE="Flamenco">Flamenco
            <BR><INPUT TYPE="radio" NAME="musica" VALUE="Pop">Pop
            <BR><INPUT TYPE="radio" NAME="musica" VALUE="Rock">Rock
            <BR>
            <BR>
            Marque si desea publicidad <INPUT TYPE="checkbox" NAME="publi" VALUE="Sí" checked>
            <BR>
            <BR>
            Campo oculto (identificador y es 8)<INPUT TYPE="hidden" NAME="identificador" VALUE="8">
            <BR>
            <BR>
            Cajas de Texto multilínea
            <BR>
            <TEXTAREA NAME="comentario" COLS="60" ROWS="4">
            </TEXTAREA>
            <BR>
            <BR>
            Listas Despegables
            <BR>
            <SELECT NAME="provincia">
                <OPTION VALUE="Sevilla" CHECKED>Sevilla
                <OPTION VALUE="Huelva">Huelva
            </SELECT>
            <BR>
            <BR>
            <INPUT TYPE="submit" VALUE="Procesar">
        </form>
    </body>
</html> 