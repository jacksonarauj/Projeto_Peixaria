<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {


	
	public function cadastroProduto(){
		
		$nome = $_POST["nome"];
		$precokg = $_POST["precokg"];
		$habitat = $_POST["habitat"];
		$this->load->model("Cadastro_model");
		
		$this->Cadastro_model->salvarProduto($_POST);

		$dados = array(
			'nome' => $nome, 'precokg' => $precokg, 'habitat' => $habitat
		);
		$this->load->view('menu');		

	}
	
	public function listar(){

		$this->load->model("Cadastro_model");

		$result = $this->Cadastro_model->getPeixes();

		$dados = array( 'peixes' => $result );
		$this->load->view("listaPeixes", $dados);	
	
	}

	public function editar($id){
		//echo $id;
		$this->load->model("Cadastro_model");
		
		if (!empty($_POST)) {

			$this->load->model("Valida_model");

			$existe = $this->Valida_model->verificarEmail($_POST["email"]);

			if (empty($existe)) {
				$this->Cadastro_model->editUsuario($id);
				header('location:'.base_url()."usuario/listar");
			}

			$dados = array( 'id' => $id,'email' => $_POST['email'], 'senha' => $_POST['senha'], 'nome' => $_POST['nome'], 'erro' => true );

			$this->load->view("menu");
			$this->load->view("bem_vindo", $dados);
		}else{
			$result = $this->Cadastro_model->getUser($id);

			$nome = $result[0]['nome'];
			$email = $result[0]['email'];
			$senha = $result[0]['senha'];

			$dados = array( 'id' => $id,'email' => $email, 'senha' => $senha, 'nome' => $nome, 'erro' => false );
			$this->load->view("menu", array('voltar'=>true));
			$this->load->view("bem_vindo", $dados);
		}

		
	}













	
}
