<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_model extends CI_Model {


	function salvar($registro){
		//return $this->db->query("SELECT * FROM `colaboradores`")->result_array();

		$array = array(
			'senha' => md5($registro['senha']), 
			'email' => $registro['email'], 
			'nome' => $registro['nome']);

		$this->db->insert('usuarios', $array);
	}

	function validar($email, $senha){
		return $this->db->query("SELECT * FROM `usuarios` WHERE email = '{$email}'  AND senha = '{$senha}' LIMIT 1")->result_array();
	}

	function getUsuarios(){
		return $this->db->query("SELECT * FROM `usuario`")->result_array();
	}

	function getUser($id){
		return $this->db->query("SELECT * FROM `usuario` WHERE id = ".$id)->result_array();
	}

	function editUsuario($id){
		$array = array('nome' => $_POST['nome'],
			'email' => $_POST['email'],
			'senha' => $_POST['senha'] );
			
			$this->db->set($array);
			$this->db->where('id', $id);
			$this->db->update('usuario');		
	}

}