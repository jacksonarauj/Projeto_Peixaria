<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	

	public function login()
	{    
		//$this->load->view('listaPeixes'); 
		$this->load->view('html_header');
		$this->load->view("cabeçalho");
		$this->load->view("login");
		$this->load->view("footer");

	}
	
	public function validarlogin()
	{
		
		//var_dump($_POST);
		$this->load->model("Cadastro_model");

		$result = $this->Cadastro_model->validar($_POST["email"],md5($_POST["senha"]));

		if (empty($result)) {
			$this->load->view('html_header');
			$this->load->view("cabeçalho");	
			$aviso = array(
				'alerta' => "Usuário e/ou senha incorretos"
			);
			$this->load->view("login",$aviso);
		}else{
			foreach ($result as $row) {
				//$dados['usuario'] = $row->email;
				//$dados['usuario'] = $row['nome'];
				$_SESSION['usuario'] = $row['nome'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['nivelAcesso'] = $row['nivelAcesso'];
			}			

			$this->load->view('html_header');
			$this->load->view("cabeçalho");
			//$_SESSION['nome'] = $dados['usuario'];
			$this->load->view("logado");
			
		}

	}
	
	public function validarRegistro() {
		
		$this->load->model("Cadastro_model");
		$result = $this->Cadastro_model->validarEmail($_POST["email"]);
		
		if (!empty($result)){
			
			$this->load->view('html_header');
			$this->load->view('cabeçalho');
			$mensagem = array(
				'alerta'=> "Email já cadastrado"
			);
			$this->load->view('registrar',$mensagem);	
		}else{
		$this->load->view('html_header');
		$this->load->view('cabeçalho');
		$this->load->view('login');	

		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$this->load->model("Cadastro_model");
		$this->Cadastro_model->salvar($_POST);
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
	
		$dados = array('nome' => $_POST['nome'],
			'email' => $_POST['email'],
			'senha' => md5($_POST['senha']),
			'id' => $_POST['id']);
		
		$this->load->model("Cadastro_model");
		$return=$this->Cadastro_model->editUsuario($dados);

        $this->listar();

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
	
		public function logout(){
				$_SESSION['usuario'] = "";
				$_SESSION['email'] = "";
				$_SESSION['nivelAcesso'] = "";
		
			header('location:'.base_url()."index.php/inicial/");
		
	}

	public function cabecalho_teste(){
		$this->load->view('html_header');
		$this->load->view("cabeçalho_teste");		
		
	}
	
	
	

	
	
	













	
}
