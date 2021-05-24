<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends CI_Controller {

	public function index()
	{
		$this->load->view('menu');
		$this->load->view('login');
	}
	
	public function registrar()
	{
		$this->load->view('menu');
		$this->load->view('registrar');
	}
	

	public function receber(){
		
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$this->load->model("Cadastro_model");
		$this->Cadastro_model->salvar($_POST);

		$dados = array(
			'nome' => $nome, 'email' => $email, 'senha' => $senha
		);
		$this->load->view('menu');
		

	}	
	
	public function cadastrarProduto(){
		
		$this->load->view('menu');
		$this->load->view('formProduto');

	}
	
	
	
	
	
	
	
	
























	
}
