<!DOCTYPE html>
<html>
<head>
	<title>Saber Palavras Repetidas</title>
</head>
<body>
	<?php 
		$frase = "Meu nome é Leonardo, tenho 20 anos, e estudo PHP, faço curso de PHP online";
		$busca = "php";
 		$cont = substr_count($frase, $busca); //stripos não e necessario apenas complementei
 		echo "FRASE: $frase <br>";
 		echo "A palavra $busca fo encontrada $cont vezes.";
 	?>
 	<br>
 	<a href="index.html"><button>Voltar ao index</button></a>
</body>
</html>