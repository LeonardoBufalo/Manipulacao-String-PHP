<!DOCTYPE html>
<html>
<head>
	<title>Quebra de Texto</title>
</head>
<body>
	<?php 
 		$t = "Esse texto é gigante para mostrar como e o funcionamento do wordwrap e para encher linguiça eu vou escrever qualquer coisa aqui, de acordo com o que esta escrito aqui ja tem bastante palavras.";
 		$r = wordwrap($t, 20, "<br/>\n");
	echo " $r </br>";
	echo "</br>";
	echo "<label>Agora aqui vai quebrar todas as linhas por causa do ->true<- </label> </br>";	
 		$t2 = "Esse texto é gigante para mostrar como e o funcionamento do wordwrap";
 		$r2 = wordwrap($t2, 1, "<br/>\n", true);
 	echo "$r2 </br>";
 	?>
 	<a href="index.html"><button>Voltar ao index</button></a>
</body>
</html>