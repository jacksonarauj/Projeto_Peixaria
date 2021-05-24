<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meio extends CI_Controller {

	public function index()
	{
		$this->load->view('bem_vindo');
	}

	public function editar(){
		
		echo "Olá, chegou até aqui ".$_POST["nome"];

	}













	
}
