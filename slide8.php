<?php

	$ca = $_POST['CA'];
	$co = $_POST['CO'];

?>

<html>
	<body>
		<form method="post">
			<input type="number" name="CA" placeholder="CA">
			<input type="number" name="CO" placeholder="CO">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>

<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$h = sqrt ($ca * $ca + $co * $co);
		echo "Teorema de Pitágoras: $h".PHP_EOL;

		$Area = ($ca * $co)/2;
		echo "Área de um triangulo: $Area";
	}
?>
