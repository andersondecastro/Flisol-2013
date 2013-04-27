<html>
<head>
	<title> Atualizaco </title>
</head>
<body>

	<form action="<?php echo base_url() ?>usuario/up" method="POST">

		<?php foreach ($usuario as $key => $value): ?>

		<input name="nome" value="<?php echo $value->nome ?>">
		<input name="id" value="<?php echo $value->id ?>">
		<input value="Atualizar" type="submit">

		<?php endforeach ?>

	</form>

</body>
</html>