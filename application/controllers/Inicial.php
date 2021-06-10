	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends CI_Controller {
    public function __construct(){
    	parent::__construct();
    }

	public function index(){
		$this->load->view('html_header');
		$this->load->view('cabeçalho');
        $this->load->Controller('Produto');
        $this->Produto->listarProduto();
		$this->load->view('footer');
			
	}

	public function receber(){
		//$name=$this->input->post('nome');
	   // $email=$this->input->post('email');
		//$senha=$this->input->post('senha');
		$this->load->view('html_header');
		$this->load->view('cabeçalho');
		$this->load->view('login');	

		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$this->load->model("Cadastro_model");
		$this->Cadastro_model->salvar($_POST);

		//$dados = array(
		//	'nome' => $nome, 'email' => $email, 'senha' => $senha
		//);
		//   echo "<pre>";
		 //  print_r($dados);

		
		   
	}

	
	public function registrar()
	{
		$this->load->view('html_header');
		$this->load->view('cabeçalho');
		$this->load->view('registrar');
		$this->load->view('footer');
	}	
	
	public function cadastrarProduto(){
		
		$this->load->view('menu');
		$this->load->view('formProduto');

	}
	
	
}
