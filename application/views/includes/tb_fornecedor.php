<table id="tb_fornecedores">
   <thead>
      <th class="tb_num_forn">DATA</th>
      <th class="tb_str_forn">RAZÃO SOCIAL</th>
      <th class="tb_str_forn">CNPJ</th>
   </thead>

   <tbody>
      <?php foreach ($query as $fornecedor): ?>
         <tr class="tb_row">
            <td class="tb_num_forn"><?php echo $fornecedor->DATA; ?></td>
            <td class="tb_str_forn"><?php echo $fornecedor->NOME_FORNECEDORES; ?></td>
            <td class="tb_str_forn"><?php echo $fornecedor->CNPJ; ?></td>
         </tr>
      <?php endforeach ?>
   </tbody>
</table>