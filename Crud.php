<?php 

require_once("Usuario.php");
require_once("Conexao.php");
class Crud extends Conexao{

public function inserirUsuario(Usuario $usuario){

	try{ 
	$con = $this->abrirConexao();
	$resultado = $con->prepare("INSERT INTO Usuario(id, nome, sexo) VALUES(?,?,?);");
	$resultado->bindValue(1, $usuario->getId());
	$resultado->bindValue(2, $usuario->getNome());
	$resultado->bindValue(3, $usuario->getSexo());
	return $resultado->execute();

    }catch(Exception $e){
    	print $e->getMessage();
    
   echo "Algo deu errado!";

    }
}
public function consultarusuario($id){
	try {
		$con = $this->abrirConexao();
	$resultado = $con->prepare("SELECT * FROM Usuario WHERE id=?;");
	$resultado->bindValue(1, $id);
	$resultado->execute();
	 return $Dados=$resultado->fetch(PDO::FETCH_ASSOC);

	} catch (Exception $e) {
		
	}

}
public function deletarUsuario($id){
	try{
		$con = $this->abrirConexao();
		$resultado= $con->prepare("DELETE FROM Usuario WHERE id=?;");
		$resultado->bindValue(1, $id);

		return $resultado->execute();

	}catch(Exception $e){
		return $e->getMessage();
	}

}
public function alterarUsuario(Usuario $usuario, $id){
	try{
		$con=$this->abrirConexao();
		$resultado= $con->prepare("UPDATE Usuario SET nome=?, sexo=? WHERE id=?");
		$resultado->bindValue(1, $usuario->getNome());
		$resultado->bindValue(2, $usuario->getSexo());
		$resultado->bindValue(3, $usuario->getId());
		 return $resultado->execute();
	}catch(Exception $e){
		return $e->getMessage();
	}
}



}


 ?>