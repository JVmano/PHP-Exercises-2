<?php
        $num = $_POST['piu'];
?>

<html>
        <body>
                <form method="post">
                        <input type="number" name="piu" placeholder="Idade">
                        <input type="submit" value="Enviar">
                </form>
        </body>
</html>

<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if ($num % 2 == 0) {
			echo $num / 2;
		} else {
			echo ($num * 3) + 1;
		}
	}
?>	
