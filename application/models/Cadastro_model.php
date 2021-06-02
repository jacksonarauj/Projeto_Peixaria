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
		
		//$array = array(
			//'precokg' => '15,20',//$registro['precokg'], 
			//'habitat' => 'Mar',//$registro['habitat'], 
			//	'nome' =>'sardinha');//$registro['nome']);
		$this->db->insert('peixes', $registro);//array);
	}

	function deletarProduto($id){
		$this->db->where('id_Peixe',$id);
		$this->db->delete('peixes');
	}

	function update_produto($id,$arra_nome){
		$this->db->where('id_Peixe',$id);
		$this->db->update('peixes',$id, $arra_nome);
	}

	function validar($email, $senha){
		return $this->db->query("SELECT * FROM `usuarios` WHERE email = '{$email}'  AND senha = '{$senha}' LIMIT 1")->result_array();
	}

	function getUsuarios(){
		return $this->db->query("SELECT * FROM `usuarios` WHERE nivelAcesso='Usuario'")->result_array();
	}
	function getPeixes(){
		return $this->db->query("SELECT * FROM `peixes`")->result_array();
	}

	function getUser($id){
		return $this->db->query("SELECT * FROM `usuarios` WHERE id = ".$id)->result_array();
	}

	function editUsuario($dados){
<<<<<<< HEAD

=======
		var_dump($dados);
		 echo"ta foda ";
>>>>>>> 25bcd98251db76152292ac4c8c046a044140985b
			$this->db->set($dados);
			$this->db->where('id', $dados['id']);
			$this->db->update("usuarios");	
	}
	
	function removeUsuario($id){
		/*$array = array('nome' => $_POST['nome'],
			'email' => $_POST['email'],
			'senha' => md5($_POST['senha']) );*/
			
			//$this->db->set($array);
			$this->db->where('id', $id);
			$this->db->delete('usuarios');		
	}

}

