<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	

	public function login()
	{
		//$this->load->view('listaPeixes');
		$this->load->view('html_header');
		$this->load->view("cabeçalho");
		$this->load->view("login");

	}
	
	public function validarlogin()
	{
		//var_dump($_POST);
		$this->load->model("Cadastro_model");

		$result = $this->Cadastro_model->validar($_POST["email"],md5($_POST["senha"]));

		if (empty($result)) {
			$this->load->view('html_header');
			$this->load->view("cabeçalho");
			$this->load->view("menu");
			$this->load->view("login");
		}else{
			foreach ($result as $row) {
				//$dados['usuario'] = $row->email;
				$dados['usuario'] = $row['nome'];
			}			

			$this->load->view('html_header');
			$this->load->view("cabeçalho");
			$this->load->view("logado",$dados);
			
		}

	}
	
	

	public function listar(){

		$this->load->model("Cadastro_model");

		$result = $this->Cadastro_model->getUsuarios();

		$dados = array( 'usuarios' => $result );
		$this->load->view('html_header');
		$this->load->view('cabeçalho');
		$this->load->view('listaUsuarios',$dados);
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

			$dados = array( 'id' => $id,'email' => $_POST['email'], 'senha' => md5($_POST['senha']), 'nome' => $_POST['nome'], 'erro' => true );

			$this->load->view("menu");
			$this->load->view("bem_vindo", $dados);
		}else{
			$result = $this->Cadastro_model->getUser($id);

			$nome = $result[0]['nome'];
			$email = $result[0]['email'];
			$senha = $result[0]['senha'];
			$status = $result[0]['Status'];

			$dados = array( 'id' => $id,'email' => $email, 'senha' => md5($senha), 'nome' => $nome, 'erro' => false );
			$this->load->view("menu", array('voltar'=>true));
			$this->load->view("bem_vindo", $dados);
		}

		
	}
	
	
	public function removeUsuario($id){
		//echo $id;
		$this->load->model("Cadastro_model");
		var_dump($id);
		
		if (!empty($id)) {

			//$this->load->model("Valida_model");

			//$existe = $this->Valida_model->verificarEmail($_POST["email"]);

			if (empty($existe)) {
				//$this->Cadastro_model->editUsuario($id);
				header('location:'.base_url()."index.php/usuario/listar");
			}

			/*$dados = array( 'id' => $id,'email' => $_POST['email'], 'senha' => md5($_POST['senha']), 'nome' => $_POST['nome'],'Status'=>$_POST['status']);*/
			$this->Cadastro_model->removeUsuario($id);
			header('location:'.base_url()."index.php/usuario/listar");
			//$this->load->view("menu");
			//$this->load->view("formRemoveUsuario", $dados);
		}else{
			/*$result = $this->Cadastro_model->getUser($id);

			$nome = $result[0]['nome'];
			$email = $result[0]['email'];
			$senha = $result[0]['senha'];
			//$status = $result[0]['Status'];

			$dados = array( 'id' => $id,'email' => $email, 'senha' => md5($senha), 'nome' => $nome, 'erro' => false);
			$this->load->view("menu", array('voltar'=>true));
			$this->load->view("formRemoveUsuario", $dados);*/
		}

		
	}

	public function teste($arquivo){
		
		$file = array(
			'pagina' => $arquivo,
		);
		
		$this->load->view('TESTE',$file);
		
	}
	
	
	

	
	
	













	
}
