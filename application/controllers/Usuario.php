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
	public function alterarDados(){
		var_dump($_POST);
		$dados = array('nome' => $_POST['nome'],
			'email' => $_POST['email'],
			'senha' => md5($_POST['senha']),
			
			'id' => $_POST['id']);
		
		$this->load->model("Cadastro_Model");
		$this->Cadastro_Model->editUsuario($dados);
		//$this->load->views('resultado');
        //echo $return;
        header('location:'.base_url()."index.php/usuario/listar");

	}

	public function editar($id){
		//echo $id;
		//Carrega model cadastro para manipulação de cadastro
		$this->load->model("Cadastro_model");
		
		if (!empty($id)) {

			$this->load->model("Valida_model");
			$result = $this->Cadastro_model->getUser($id);
       
         foreach ($result as $row) {

         	$dados = array(
         		'id'=>  $row['id'],
         		'email' => $row['email'],
         		'senha' => md5($row['senha']),
				'nome' => $row['nome'],

         	);
         	
         }
			//$dados = array( 'id' => $id,'email' => $result["email"], 'senha' => md5($result['senha']), 'nome' => $result['nome'], 'erro' => true );

			
			$this->load->view("updateUsuario", $dados);
		}else{
			/*$result = $this->Cadastro_model->getUser($id);

			$nome = $result[0]['nome'];
			$email = $result[0]['email'];
			$senha = $result[0]['senha'];
			

			$dados = array( 'id' => $id,'email' => $email, 'senha' => md5($senha), 'nome' => $nome, 'erro' => false );
			//$this->load->view("menu", array('voltar'=>true));
			//$this->load->view("bem_vindo", $dados);
			$this->load->view('html_header');
			$this->load->view('cabeçalho');
			echo"deuboa";	*/	    

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
