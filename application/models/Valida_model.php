<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Valida_model extends CI_Model {

	function verificarEmail($email){
		return $this->db->query("SELECT * FROM `usuarios` WHERE email = '{$email}' LIMIT 1")->result_array();
	}
	function verificarProduto($nome){
		return $this->db->query("SELECT * FROM `usuarios` WHERE nome='{$nome}' LIMIT 1")
	}
}