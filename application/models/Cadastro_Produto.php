<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 Class Cadastro_Produto extends CI_Model {
 	
 	function validarProduto($nome,$precokg){
 		$resultado = $this->db->query("SELECT * FROM `peixes` WHERE nome = '{$nome}' AND precokg='{$precokg}'LIMIT 1")->result_array();
 		//precisa de uma validaçao simples pra ver se ja existe 
  		if ($resultado==FALSE){	
 			return TRUE;
 		}
 		else {		 
 			return FALSE;
 		}
 	}

	function salvarProduto($registro){
        $this->db->insert('peixes', $registro);
		//$return= $this->db->query("SELECT * FROM `peixes`")->result_array();
		//$array = array(
			//'precokg' => '15,20',//$registro['precokg'], 
			//'habitat' => 'Mar',//$registro['habitat'], 
			//	'nome' =>'sardinha');//$registro['nome']);
		//if ($return)
		//array);
	}
	function deletarProduto($id){
		$this->db->where('id_Peixe',$id);
		$this->db->delete('peixes');
	}
	function update_produto($id,$arra_nome){
		$this->db->where('id_Peixe',$id);
		$this->db->update('peixes',$id, $arra_nome);
	}

	function getPeixes(){
		return $this->db->query("SELECT * FROM `peixes`")->result_array();
	}
}
?>