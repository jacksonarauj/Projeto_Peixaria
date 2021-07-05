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
		$this->load->model("Cadastro_Produto");
		
		if (!empty($_POST)) {

			$this->load->model("Valida_model");

			$existe = $this->Valida_model->verificarProduto($_POST["nome"]);

			if (empty($existe)) {
				$this->Cadastro_model->editUsuario($id);
				header('location:'.base_url()."index.php/Produto/listar");
			}

			$dados = array( 'id' => $id,'nome' => $_POST['nome'], 'habitat' => $_POST['habitat'], 'precokg' => $_POST['precokg'], 'erro' => true );

		}else{
			$result = $this->Cadastro_Produto->getPeixes($id);

			$nome = $result[0]['nome'];
			$precokg= $result[0]['precokg'];
			$habitat = $result[0]['habitat'];

			$dados = array( 'id' => $id,'nome' => $nome, 'precokg' => $precokg, 'habitat' => $habitat, 'erro' => false );
			
			$this->load->view("listaPeixes", $dados);
		}

		
	}













	
}
