<!DOCTYPE html>
	<html lang="es">
	<head>
		<title><?php echo lang('titulo')?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>estatico/css/960.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>estatico/css/text.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>estatico/css/reset.css" media="screen" />
		 <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	</head>
	<body>
		<div class="container_12">
			<div class="grid_12">
				<h1 style="text-align: center">Bienvenido al Panel de Control, editor <?=$this->session->userdata('perfil')?></h1>
				<?=anchor(base_url().'admin/login/logout_ci', 'Cerrar sesión')?>
			</div>
		</div>	
	</body>
</html>