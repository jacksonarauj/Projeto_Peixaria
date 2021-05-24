<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Valida_model extends CI_Model {

	function verificarEmail($email){
		return $this->db->query("SELECT * FROM `usuario` WHERE email = '{$email}' LIMIT 1")->result_array();
	}
}