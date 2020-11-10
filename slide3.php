<?php
	$nome = $_POST['user'];
	$idade = $_POST['age'];
	$cidade = $_POST['city'];
	$imagem = "curitiba.jpg";
	$coisas = $_POST['things'];
?>

<html>
	<body>
		<form method="post" enctype="multipart/form-data">
			<input type="text" name="user" placeholder="nome">
			<input type="number" name="age" placeholder="Idade">
			<input type="file"  name="image" accept="image/*">
			<input type="text" name="things" placeholder="Hobbies">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>

<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		echo $nome.PHP_EOL;
		echo $idade.PHP_EOL;
		echo $cidade.PHP_EOL;
		print"<img src=\"$imagem\" width=\"200px\" height=\"100px\"\/>".PHP_EOL;
		echo $coisas.PHP_EOL;
	}
?>
