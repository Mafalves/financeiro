<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylesheet.css'); ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function()
                {
                    $("#menu_cadastro").click(function()
                        {
                            $("#submenu_cadastro").toggle();
                        });
                });
        </script>

        <title>Painel Administrativo</title>

    </head>

    <body>
  
        <div id="header">
            <a href="#">Sair</a>
            <a href="#">Usuario</a>
        </div>
        
        <div id="sidebar">
            <ul class="menu">
                <li class="menu-item" id="inicio">
                    <a href="<?php echo site_url('Painel/index')?>" > Início</a>
                </li>
                
                <li class="menu-item" id="menu_cadastro">
                    <a href="#">Cadastros</a>
                    <ul class="submenu" id="submenu_cadastro">
                        <li class="submenu-item">
                            <a href="<?php echo site_url('Painel/listaFornecedor')?>" >Fornecedor</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">Produto</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">Usuário</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item" id="menu_relatorio">
                    <a href="#">Relatórios</a>
                </li>

                <li class="menu-item" id="menu_lancamento">
                     <a href="<?php echo site_url('Painel/listaPedido')?>" >Lançar Pedidos</a>
                </li>
            </ul>
        </div>
    </body>
</html>