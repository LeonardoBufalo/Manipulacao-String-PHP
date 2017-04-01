<!DOCTYPE html>
<html>
<head>
	<title>Inverter a Palavra</title>
</head>
<body>
	<?php 
		$frase = "Estou aprendendo PHP";
		$pos = strpos($frase, "PHP");
		
		echo "Na frase '$frase' a palavra PHP foi encontrada na posicao: $pos <br>";

		$frase1 = "Estou aprendendo a linguagem PHP";
		$pos1 = stripos($frase1, "php"); //stripos busca não apenas identico mas que seja com as mesmas palavras
		
		echo "Na frase '$frase1' a palavra PHP foi encontrada na posicao: $pos1";
 	?>
 	<br>
 	<a href="index.html"><button>Voltar ao index</button></a>
</body>
</html>