<!DOCTYPE html>
<html>
<head>
	<title>Voltar o texto de um Vetor</title>
</head>
<body>
	<?php 
 		$vetor[0] = "Aula";
 		$vetor[1] = "de";
 		$vetor[2] = "php";

 		$texto = implode("#", $vetor); //ou usar o join no lugar de implode
 		echo "$texto";
 	?>
 	<br>
 	<a href="index.html"><button>Voltar ao index</button></a>
</body>
</html>