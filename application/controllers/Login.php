<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
	{
		public function index()
			{
				$this->load->view("login_view");
			}

		public function autenticar()
			{
	 
		        $this->load->model("login_model");
		        $email = $this->input->post("email");
		        $senha = $this->input->post("senha"); 
		        $usuario = $this->login_model->buscaPorEmailSenha($email,$senha); 
		 
		        if($usuario)
			        {
			            $this->session->set_userdata($usuario);
			            //$dados = array("logou" => $email);
			            $this->load->view("includes/navbar");		           
			        }
		        else
			        {
			            $this->load->view("login_view");
			        }
	    	}
    }


			 
