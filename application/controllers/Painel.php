<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller 
	{

		function __construct()
			{
				parent::__construct();
				$this->load->model("painel_model");
			}
		
		public function index()
			{
				$this->load->view('includes/navbar.php');
			}

		
		//CRUD - FORNECEDORES
		public function listaFornecedor()
			{ 
				$data['query'] = $this->painel_model->readFornecedor();

				$this->load->view('includes/navbar.php');
				$this->load->view('includes/form_fornecedor.php');
				$this->load->view('includes/tb_fornecedor.php', $data);
			}

		public function cadastraFornecedor()
			{
			    $novoFornecedor = array(
			       'NOME_FORNECEDORES' => $this->input->post('nome_fornecedor'),
			       'CNPJ' => $this->input->post('cnpj_fornecedor'),
			       'DATA' => $this->input->post('data_fornecedor')
			    );	

			    if($novoFornecedor != null)
			    	{
						$this->painel_model->instertFornecedor($novoFornecedor);	
					}

				$this->listaFornecedor();
			}

		public function deleteFornecedor()
			{
				if(isset($_POST['delete_fornecedor']))
				{
					$fornecedor = $this->input->post('cnpj_fornecedor');	
					$this->painel_model->deleteFornecedor($fornecedor);
				}

				$this->listaFornecedor();
			}

		
		//CARREGA OS DROPDOWN DO FORM - PEDIDOS
		public function listaPedido()
			{ 
			
				$dropDown['fornecedores'] = $this->painel_model->readFornecedor();	
				$dropDown['produtos'] = $this->painel_model->readProduto();
				$dropDown['naturezas'] = $this->painel_model->readNatureza();

				$this->load->view('includes/navbar.php');
				$this->load->view('includes/form_pedido.php', $dropDown);
				
			}


		//RECEBe OS VALORES DO FORM E ENVIA PARA O MODEL
		public function cadastraPedido()
			{
			    $novoPedido = array(
				    'FORN_IDFORNECEDORES' => $this->input->post('forn_pedido'),
				    'NAT_IDNATUREZAS' => $this->input->post('nat_pedido'),
				    //'VALOR_TOTAL' => 
				    'DATA_LANCAMENTO' => $this->input->post('data_pedido'),
			    );	
		 		
		 		$novoItem['PROD_IDPRODUTOS'] = $this->input->post('prod_pedido');
		 		$novoItem['QTD_ITENS'] = $this->input->post('qtd_pedido');
		 		$novoItem['VALOR_UNIT'] = $this->input->post('valor_unit');
		 		$novoItem['VALOR_SUB'] = $novoItem['QTD_ITENS'] * $novoItem['VALOR_UNIT'];
		 		$novoItem['PED_IDPEDIDOS'] = $this->painel_model->insertPedido($novoPedido);

		 		$this->painel_model->insertItem($novoItem);
		 		$this->listaPedido();
			}
	}