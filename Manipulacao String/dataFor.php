<!DOCTYPE html>
<html>
<head>
	<title>Aula PHP / PHP</title>
</head>
<body>
	<?php
  		$n = isset($_GET["num"])?$_GET["num"]:0;
  		echo "<h2>Tabuada do $n</h2><br/>";
  		for ($i=1; $i <=10 ; $i++) { 
  			$r = $n * $i;
  			echo "$n x $i = $r<br/>";
  		}

    ?>
    <a href="indexFor.php"><button>Voltar</button></a>
</body>
</html>