<!doctype html>
<html>
<head>
	<meta charset="UTF-8"> 
	<title> <?php echo $title ?> </title>
</head>
<body>

	<h1> Cadastro de usuario </h1>

	<?php 

	echo form_open('usuario/add', '');

	echo form_input('nome_usuario', '');

	echo form_submit('', 'Enviar');

	echo form_close();

	?>

</body>
</html>