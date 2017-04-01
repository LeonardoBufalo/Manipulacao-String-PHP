<!DOCTYPE html>
<html>
<head>
	<title>Saber qual letra esta no codigo ASC II</title>
</head>
<body>
	<?php 
		$nome="LeOnArdO LeMEs BUFalO";
 		$nomeupper = strtoupper($nome);

 		echo "O nome com as letras maiusculas é: $nomeupper";
 		echo "<br>";

 		$name = "LeOnArdO LeMEs BUFalO";
 		$name2 = ucfirst(strtolower($name)); // O strtolower é opcional, para deixar tudo minusculo e so a primeira maiusculo
 		echo "<br>";
 		echo "$name2";

		$na = "LeOnArdO LeMEs BUFalO";
 		$na2 = ucwords(strtolower($name)); // O strtolower é opcional, para deixar tudo minusculo e so a primeira maiusculo
 		echo "<br>";
 		echo "$na2";

 	?>
 	<br>
 	<a href="index.html"><button>Voltar ao index</button></a>
</body>
</html>