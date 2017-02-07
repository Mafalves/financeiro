<table id="tb_fornecedores">
   <thead>
      <th class="tb_num_forn">Data</th>
      <th class="tb_str_forn">Razão Social</th>
      <th class="tb_str_forn">CNPJ</th>
      <th class="tb_num_forn">Ação</th>

   </thead>

   <tbody>
      <?php foreach ($query as $fornecedor): ?>
         <tr class="tb_row">
            <form method="POST" action="<?php echo site_url('painel/deleteFornecedor'); ?>">

               <td class="tb_num_forn"><?php echo $fornecedor->DATA; ?></td>
               <td class="tb_str_forn"><?php echo $fornecedor->NOME_FORNECEDORES; ?></td>
               <td class="tb_str_forn" name="cnpj_fornecedor"><?php echo $fornecedor->CNPJ; ?></td>
               <td class="tb_num_forn"> 
                  <button name="edit_fornecedor"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:20px;"></i></button>
                  <button name="delete_fornecedor"><i class="fa fa-trash-o" style="font-size:20px;color:red"></i></button>
               </td>

            </form>

         </tr>
      <?php endforeach ?>
   </tbody>
</table>