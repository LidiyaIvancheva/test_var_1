<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Прогноза за времето</title>
</head>
<body>
<form method="get" action="01.php">

<label for="temp"><p>Въведете дневна температура!</p></label>
<input type="number" name="temp" id="temp" >
<input type="submit" name="submit" value="Прогноза">
<?php 
if (!empty($_GET)) {
	$temp = $_GET['temp'];
	if ($temp < 17 || $temp > 42) {
		echo "<p>Моля, въведете температура в диапазона 17 - 42 градуса!</p>";
	} elseif ($temp >= 17 && $temp < 22) {
		echo "<p>Очаква Ви приятно пролетно време с малка вероятност от валежи!</p>";
	} elseif ($temp >= 22 && $temp < 30) {
		echo "<p>Високи температури и вероятност за гръмотевични бури! Изключете антените и рутерите си ако нямате резервни пари за нови телевизори и компютри!</p>";
	} elseif ($temp >= 30 && $temp<= 42) {
		echo "<p>Невероятни горещини - търсете сянка, бански, джапанки, басейн, море, нещо разхладително за пиене и шезлонг!</p>";
	}
}
?>	
</form>
	
</body>
</html>