<html>
<head>
	<title> Ver Links </title>
</head>
<body>

	<?php foreach ($links as $key => $value): ?>
		<h3> <?php echo $value->descricao ?>  - 
		 <?php echo $value->nome ?> 
		</h3>
	<?php endforeach ?>

</body>
</html>