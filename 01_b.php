<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Форма</title>
</head>
<body>
	<form action="01_b.php" method="post">
		<label for="psw">
			<p>
				Въведете парола
			</p>
		</label>
		<input type="password" name="psw" id="psw">
		<label for="psw_repeat">
			<p>
				Повторете паролата
			</p>
		</label>
		<input type="password" name="psw_repeat" id="psw_repeat">
		<p>
			<input type="submit" name="submit" value="submit">
		</p>
	</form>
	<?php
	// method="post" - защото информация, касаещи пароли, банкови сметки и др. подобни, които са лична тайна не бива да се предават с get, тъй като могат да се видят в браузъра. с post остават невидими за другите потребители.
	if (!empty($_POST)) {
		$password = $_POST['psw'];
		$password_repeat = $_POST['psw_repeat'];
		if (strlen($password) <= 6) {
			echo "Моля, въведете парола с дължина по-голяма от 6 символа!";
		} elseif ($password !== $password_repeat) {
			echo "Паролите на съвпадат! Опитайте отново!";
		} else {
			echo "<h1>Welcome!</h1>";
		}
	}



	?>
</body>
</html>