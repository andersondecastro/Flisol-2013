<html>
<head>
	<title> Cadastro Links</title>
</head>
<body>

	<form method="POST" action="link/add">

		Descricao : <input name="descricao">

		Usuario : 
		<select name="usuario_id">
			<option value=""> Selecione o Usuario </option>

			<?php foreach ($usuarios as $key => $value): ?>
				<option value="<?php echo $value->id ?>"> <?php echo $value->nome ?> </option>
			<?php endforeach ?>

		</select>

		<input type="submit" value="Salvar">

	</form>

</body>
</html>