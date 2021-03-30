<html>
<meta charset="UTF-8"> 
	<header>
		<title>Edad</title>
	</header>
	<body>
		<?php
		$nombre="José";
		$edad=26;
		echo "Nombre : " . "$nombre" . "<br>";
		echo "Edad : " . "$edad" . "<br>";

		if($edad >= 18)
			echo "eres mayor de edad<br>";
		else
			echo "eres menor de edad<br>";
		
		$i=100;

		while($i<=1000){
			echo "$i" . "<br>";
		++$i;
		}
		
		?>
	</body>
</html>