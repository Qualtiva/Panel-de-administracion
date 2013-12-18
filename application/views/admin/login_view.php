<!DOCTYPE html>
	<html lang="es">
	<head>
		<title><?php echo lang('titulo')?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="<?=base_url()?>estatico/css/preview.css" rel="stylesheet" />
		<script src="<?=base_url()?>estatico/js/modernizr.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
				<link rel="stylesheet" type="text/css" href="<?=base_url()?>estatico/css/960.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>estatico/css/text.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>estatico/css/reset.css" media="screen" />
		 <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
		 <style type="text/css">
		 	h1{
		 		font-size: 22px;
		 		text-align: center;
		 		margin: 20px 0px;
		 	}
		 	#login{
		 		background: #fefefe;
		 		min-height: 300px;
		 	}
		 	#formulario_login{
		 		font-size: 14px;
		 		background-image: linear-gradient(#013950, #00a8ec 90%, #013950);
				border: none;
				box-shadow: none;
				outline: none;				
		 	}
		 	label{
		 		display: block;
		 		font-size: 16px;
		 		color: white;
		 		font-weight: bold;
		 	}
		 	input[type=text],input[type=password]{
		 		padding: 10px 6px;
		 		width: 400px;
		 	}
		 	input[type=submit]{
		 		padding: 5px 40px;
		 		background-color: white;
				border: none;
		 		color: black;
		 	}
		 	input[type=register]{
		 		padding: 10px 40px;
		 		background: #61399d;
		 		color: #fff;
		 	}
		 	#campos_login{
		 		margin: 50px 0px;
		 	}
		 	p{
		 		color: #f00;
		 		font-weight: bold;
		 	}
		 </style>
	</head>
<body class="eternity-form" style="background: url('<?php echo base_url()?>estatico/imagenes/bg.jpg');">
	<?php
	$username = array('name' => 'username', 'placeholder' => 'Nombre de Usuario');
	$password = array('name' => 'password',	'placeholder' => 'Introduce Tu Password');
	$submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
	$register = array('name' => 'register', 'value' => 'Register', 'title' => 'Registrarse');
	?>
	<div class="container_12">
			<font color="black" style="text-shadow: black 0.1em 0.1em 0.2em;">
				<h1>LOGIN - PANEL DE ADMINISTRACIÓN</h1>
			</font>
			<div class="grid_8 push_2" id="formulario_login">
				<div class="grid_6 push_1" id="campos_login">
					<?=form_open('admin/login/new_user')?>
					<label for="username">Nombre de usuario:</label>
					<?=form_input($username)?><p><?=form_error('username')?></p>
					<label for="password">Introduce tu password:</label>
					<?=form_password($password)?><p><?=form_error('password')?></p>
					<?=form_hidden('token',$token)?></br>
					<?=form_submit($submit)?>
					<?=form_close()?>
					<?php 
					if($this->session->flashdata('usuario_incorrecto'))
					{
					?>
					<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
					<?php
					}
					?>
				</div>
			</div>
	</div>
	</body>
</html>