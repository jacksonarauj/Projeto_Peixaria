<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_model extends CI_Model {


	function salvar($registro){
		//return $this->db->query("SELECT * FROM `colaboradores`")->result_array();
		
		$array = array(
			'senha' => md5($registro['senha']), 
			'email' => $registro['email'], 
			'nome' => $registro['nome'],
			'nivelAcesso'=>'Usuario');

		$this->db->insert('usuarios', $array);
	}
	
	
	function salvarProduto($registro){
		//return $this->db->query("SELECT * FROM `colaboradores`")->result_array();
		
		$array = array(
			'precokg' => $registro['precokg'], 
			'habitat' => $registro['habitat'], 
			'nome' => $registro['nome']);
			

		$this->db->insert('peixes', $array);
		
	}

	function validar($email, $senha){
		return $this->db->query("SELECT * FROM `usuarios` WHERE email = '{$email}'  AND senha = '{$senha}' LIMIT 1")->result_array();
	}

	function getUsuarios(){
		return $this->db->query("SELECT * FROM `usuarios` WHERE Status=1")->result_array();
	}
	function getPeixes(){
		return $this->db->query("SELECT * FROM `peixes`")->result_array();
	}

	function getUser($id){
		return $this->db->query("SELECT * FROM `usuarios` WHERE id_Usuario = ".$id)->result_array();
	}

	function editUsuario($id){
		$array = array('nome' => $_POST['nome'],
			'email' => $_POST['email'],
			'senha' => md5($_POST['senha']),
			'Status'=>$_POST['status']);
			
			$this->db->set($array);
			$this->db->where('id_Usuario', $id);
			$this->db->update('usuarios');		
	}
	
	function removeUsuario($id){
		$array = array('nome' => $_POST['nome'],
			'email' => $_POST['email'],
			'senha' => md5($_POST['senha']) );
			
			$this->db->set($array);
			$this->db->where('id_Usuario', $id);
			$this->db->update('usuarios');		
	}

}

