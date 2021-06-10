<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {


	
	public function cadastroProduto(){
		$this->load->view('html_header');
		$this->load->view('cabeçalho');
		$this->load->view('formProduto');
		$this->load->view('footer');
	}

	public function validarCadastroProduto(){
		$this->load->model("Cadastro_Produto");
		$result = $this->Cadastro_Produto->validarProduto($_POST["nome"],$_POST["precokg"]);

		if ($result==false){
			$this->load->view('html_header');
			$this->load->view('cabeçalho');
			$mensagem = array(
				'alerta'=> "Esse produto ja esta cadastrado"
			);
			$this->load->view('formProduto',$mensagem);	
		}else if($result==true){
			$this->load->view('html_header');
			$this->load->view("cabeçalho");
			$this->load->model("Cadastro_Produto");
			$this->Cadastro_Produto->salvarProduto($_POST);
		}
	}
	
	public function listar(){
		$this->load->model("Cadastro_Produto");
		$result = $this->Cadastro_Produto->getPeixes();
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
