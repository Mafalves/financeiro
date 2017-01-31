<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_Model extends CI_Model
	{
		//CRUD - FORNECEDORES
	    public function instertFornecedor($novoFornecedor)
		    {
		    	$this->db->insert('fornecedores', $novoFornecedor);
		    }

		public function readFornecedor()
			{
				$query = $this->db->get('fornecedores');
				return $query->result();
			}	

		//LISTA - PRODUTOS
		public function readProduto()
		{
			$query = $this->db->get('produtos');
			return $query->result();
		}

		//LISTA - NATUREZA
		public function readNatureza()
		{
			$query = $this->db->get('naturezas');
			return $query->result();
		}

		//INSERE OS DADOS DO PEDIDO NAS TABELAS 'PEDIDOS' E 'ITENS'
		public function insertPedido($novoPedido)
		{
			$query = $this->db->insert('pedidos', $novoPedido);

		}

		public function getIdPedido()
		{
			$this->db->select_max('ID_PEDIDOS');
			$query = $this->db->get('pedidos');
			return $query->row();
		}

		public function insertItem($novoItem)
		{
			$query = $this->db->insert('itens', $novoItem);
		}
	}