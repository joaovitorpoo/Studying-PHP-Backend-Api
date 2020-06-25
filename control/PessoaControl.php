<?php
include __DIR__.'/../model/Pessoa.php';

class PessoaControl{
	function insert($obj){		
		$pessoa = new Pessoa();	
		/* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */			
		return $pessoa->insert($obj);		
	}

	function update($obj,$id){
		$pessoa = new Pessoa();
		return $pessoa->update($obj,$id);
	}

	function delete($obj,$id){
		$pessoa = new Pessoa();
		return $pessoa->delete($obj,$id);
	}

	function find($id = null){
		$pessoa = new Pessoa();
		return $pessoa->find($id);
	}

	function findAll(){
		$pessoa = new Pessoa();
		return $pessoa->findAll();
	}
}

?>