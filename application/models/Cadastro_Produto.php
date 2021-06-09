<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 Class Cadastro_model_Produto extends CI_Model {
 	
 	function validarProduto($nome,$precokg,$habitat){

 		return=$this->db->query("SELECT * FROM `peixes` WHERE nome = '{$nome}'  AND habitat = '{$habitat}' AND precokg='{$precokg}'LIMIT 1")->result_array();
 		//precisa de uma validaçao simples pra ver se ja existe 
  		/*if ($return==FALSE){
 			echo"tudo certo";
 		}
 		else {
 			echo "ja existe";

 		}*/


 	}

	function salvarProduto($registro){
		$return= $this->db->query("SELECT * FROM `peixes`")->result_array();

		
		//$array = array(
			//'precokg' => '15,20',//$registro['precokg'], 
			//'habitat' => 'Mar',//$registro['habitat'], 
			//	'nome' =>'sardinha');//$registro['nome']);
		if ($return)
		$this->db->insert('peixes', $registro);//array);
	}
	function deletarProduto($id){
		$this->db->where('id_Peixe',$id);
		$this->db->delete('peixes');
	}
	function update_produto($id,$arra_nome){
		$this->db->where('id_Peixe',$id);
		$this->db->update('peixes',$id, $arra_nome);
	}}
?>