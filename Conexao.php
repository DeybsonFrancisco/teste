<?php 
abstract class Conexao{

public  static function abrirConexao(){
	try{

		$con = new PDO("mysql:host=localhost; dbname=estudo;","root","");
		return $con;
	}catch(PDOException $e){
		return $e->getMessage();
	}
	

}

}

 ?>