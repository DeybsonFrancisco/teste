<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php 
require_once("Crud.php");
$crud = new Crud();



if(!isset($_GET['codigo'])){ 
	

$id = $_GET['id'];
$nome = $_GET['nome'];
$sexo = $_GET['sexo'];

$usuario = new Usuario($id, $nome, $sexo);
$crud->alterarUsuario($usuario, $id);
}else{
	$codigo = $_GET['codigo'];
	$resultado = $crud->consultarUsuario($codigo);
	$usuario2 = new Usuario($resultado['id'], $resultado['nome'], $resultado['sexo']);

	
}




 ?>
<body>
	<pre>
	<?php //print_r($usuario2); ?>
	</pre>
</body>
</html>