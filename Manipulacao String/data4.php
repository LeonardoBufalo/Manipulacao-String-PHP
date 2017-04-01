<!DOCTYPE html>
<html>
<head>
	<title>Separar em Vetor por Espaço</title>
</head>
<body>
	<?php 
 		$site="Curso em video";
 		$vetor=explode(" ", $site); //dentro das "" e oq vai delimitar sempre a divisão dos espaços
 		print_r($vetor);
 	?>
 	<br>
 	<a href="index.html"><button>Voltar ao index</button></a>
</body>
</html>