<?php

include __DIR__.'/Conexao.php';

class Conteudo extends Conexao {
	private $titulo;
    private $descricao;
    private $horario;
    private $universidade_id;

    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getHorario() {
        return $this->horario;
    }

    function getUniversidade_id() {
        return $this->universidade_id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

    function setuniversidade_id($universidade_id) {
        $this->universidade_id = $universidade_id;
    }

    public function insert($obj){
    	$sql = "INSERT INTO conteudo(titulo,descricao,horario,universidade_id) VALUES (:titulo,:descricao,:horario,:universidade_id)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('titulo',  $obj->titulo);
        $consulta->bindValue('descricao', $obj->descricao);
        $consulta->bindValue('horario' , $obj->horario);        
        $consulta->bindValue('universidade_id' , $obj->universidade_id);
    	return $consulta->execute();
	}

	public function update($obj,$id = null){
		$sql = "UPDATE conteudo SET titulo = :titulo, descricao = :descricao,horario = :horario, universidade_id = :universidade_id WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('titulo', $obj->titulo);
		$consulta->bindValue('descricao', $obj->descricao);
		$consulta->bindValue('horario' , $obj->horario);
		$consulta->bindValue('universidade_id' , $obj->universidade_id);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM conteudo WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM conteudo WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
	}

	public function findAll(){
		$sql = "SELECT * FROM conteudo";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>