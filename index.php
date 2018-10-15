<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	 ?>
	<pre>
		<h1>hello word</h1>
		<h1>Cadastro de usuarios</h1>
		<form action="dados.php" method="GET">
			<label for="id">ID </label>
			<input type="number" name="id">
			<label for="nome">Nome </label>
			<input type="text" name="nome">
			<label for="sexo">Sexo</label>
			<input type="text" name="sexo">
			<br>
			<input type="submit" value="cadastrar">  <input type="reset" value="limpar">
			<br>
		</form><br>
		<h1>Consulta</h1>
		<form action="dados.php" method="GET">
			<label for="codigo">ID</label>
			<input type="number" name="codigo">
			<br>
			<input type="submit" value="procurar">  <input type="reset" value="limpar">

		</form>
	</pre>
</body>
</html>