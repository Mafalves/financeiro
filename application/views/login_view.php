<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css'); ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		
		<form method="POST" action="<?php echo site_url('login/autenticar'); ?>" class="login">
			<label>E-mail:
				<br>
				<input type="email" name="email" id="email" placeholder="exemplo@email.com">
			</label>

			<br><br>

			<label>Senha:
				<br>
				<input type="password" name="senha" id="senha" placeholder="senha">
			</label>

				<br><br>

			<input type="submit" name="entrar" value="Entrar"  id="entrar">
		</form>
	</body>
</html>