<!DOCTYPE html>
<html>
<head>
	<title>Aula PHP / HTML</title>
</head>
<body>
	<div>
		<form method="get" action="dataFor.php">
		<label>Escolha o Numero</label>
		<select name="num">
				<?php
				for ($c = 1; $c<=10; $c++) {
				echo "<option>$c</option>"; 
				} 
				?>
			</select>
			<button>Cacule a Tabuada</button>
		</form>
		<a href="index.html"><button>Voltar ao Index</button></a>
	</div>
</body>
</html>