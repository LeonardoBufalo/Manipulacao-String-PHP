<!DOCTYPE html>
<html>
<head>
	<title>Comprimento do Texto</title>
</head>
<body>
	<?php 
		$txt = "abcdefghijklmnopqrstuvwxyz";
	 	$tamanho = strlen($txt);
	 	echo "<br>";
	 
	 	//printf("%s", $tamanho);
	 	echo "Alfabeto: $txt <br>";
	 	echo "O alfabeto tem: $tamanho letras <br>";
	 	echo "<br>";
	 	$nome= "   Leonardo Lemes Bufalo   ";
	 	echo "Nome: $nome <br>";
	 	$tamanho1 = strlen($nome);
	 	$tamanho2 = trim($nome);
	 	echo "Contador com todos os caracteres: $tamanho1 <br>";
	 	echo "Contador sem os caracteres do inicio e final: ". strlen($tamanho2);
	 	echo "<br>";

	 	echo "<h3>Agora vamos contar as PALAVRAS</h3> <br>";
	 	$txt = "Eu vou estudar php";
	 	$cont = str_word_count($txt,0);

	 	echo "Frase que foi contada: $txt. <br>";
	 	echo "Numero de palavras: $cont. <br>";
	 	echo "Agora vamos guardar o texto em um vetor: <br>";
	 	$vcount = str_word_count($txt,1);
	 	print_r($vcount);
	 	echo "<br>";

	 	echo "Agora vamos guardar o texto em um vetor doido: <br>";
	 	$count2 = str_word_count($txt,2);
	 	print_r($count2);
	 	echo "<br>";
	 ?>

	 <a href="index.html"><button>Voltar ao index</button></a>
</body>
</html>