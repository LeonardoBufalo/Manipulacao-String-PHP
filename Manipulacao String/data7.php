<!DOCTYPE html>
<html>
<head>
	<title>Saber qual letra esta no codigo ASC II</title>
</head>
<body>
	<?php 
		$num = 67;
 		$letra = chr($num);
 	
 		echo "A letra que esta no codigo $num é: $letra. <br>";
 	
 		$letraCod = "A";
 		$cod = ord($letraCod);

 		echo "O numero da letra $letraCod é: $cod";

 	?>
 	<br>
 	<a href="index.html"><button>Voltar ao index</button></a>
</body>
</html>