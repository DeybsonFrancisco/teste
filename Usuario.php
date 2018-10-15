<?php 
class Usuario{

	private $id;
	private $nome;
	private $sexo;



	public function Usuario($id, $nome, $sexo){
		$this->setId($id);
		$this->setNome($nome);
		$this->setSexo($sexo);
	}

	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id= $id;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome= $nome;
	}
	public function getSexo(){
		return $this->sexo;
	}
	public function setSexo($sexo){
		$this->sexo= $sexo;
	}

} ?>