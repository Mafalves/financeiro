

	<form method="POST" id="default_form_pedido" action="<?php echo site_url('painel/cadastraPedido'); ?>">
	
			<label class="lbl_pedido1">FORNECEDOR:<br/>
				<select name = 'forn_pedido' class="inp_ped_1">
		            <?php foreach($fornecedores as $fornecedor)
			            echo	'<option value="'.$fornecedor->ID_FORNECEDORES.' ">'.$fornecedor->NOME_FORNECEDORES.'</option>'
			        ?>
			    </select>


		   	</label>
		
				<br/>

			<label class="lbl_pedido1">NATUREZA:<br/>
			    <select name = 'nat_pedido' class="inp_ped_1">
		            <?php foreach($naturezas as $natureza)
			            echo	'<option value="'.$natureza->ID_NATUREZA.' ">'.$natureza->DESCRICAO_NAT.'</option>'
			        ?>
			    </select>
			</label>

				<br/>

			<label class="lbl_pedido1">PRODUTO:<br/>
				<select name = 'prod_pedido' class="inp_ped_1">
		            <?php foreach($produtos as $produto)
			            echo	'<option value="'.$produto->ID_PRODUTOS.' ">'.$produto->DESCRICAO_PD.'</option>';
			        ?>
			    </select>
			</label>
	
				<br/>
		
			<label class="lbl_pedido2">QUANTIDADE:<br/>
		    	<input type="number" min="1" max="20" name="qtd_pedido" class="inp_ped_2" required>
		    </label>

		    <label class="lbl_pedido2">VALOR:<br/>
		  		<input type="text" name="valor_unit" placeholder="0,00" class="inp_ped_2" required>
		  	</label>
		
		  		<br/>

			<label class="lbl_pedido3">DATA:<br/>
		 		<input type="date" name="data_pedido" class="inp_ped_3" required>
		 	</label>
		</div>

<!--
			<input type="submit" name="sbm_adiciona" class="sbm_pedido" value="Adicionar Item">
-->			
			<input type="submit" name="sbm_pedido" class="sbm_pedido" value="Enviar">
	</form>
