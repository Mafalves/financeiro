<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model
	{
	    public function buscaPorEmailSenha($email, $senha)
		    {
		        $this->db->where("email", $email);
		        $this->db->where("senha", $senha);
		        $usuario = $this->db->get("usuarios")->row_array();
		        return $usuario;
		    }
	}