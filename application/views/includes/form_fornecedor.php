<form method="POST" id="form_fornecedores" action="<?php echo site_url('painel/cadastraFornecedor'); ?>">
	
	<input type="text" name="nome_fornecedor" placeholder="Razão Social:" class="input_fornecedores" required>
	
	<input type="text" name="cnpj_fornecedor" placeholder="CNPJ:" class="input_fornecedores1" required>

	<input type="date" name="data_fornecedor" placeholder="Data: dd-mm-yyy" class="input_fornecedores1" required>
		<br>
	<input type="submit" name="cadastrar" value="Cadastrar" id="sbm_fornecedores">
</form>