
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="jquery-3.2.1.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="culc.php" method="post">
		<input type="text" name="" placeholder="Сума одержаного кредиту"><br>
		<input type="text" name="" placeholder="Дата отримання кредиту (дд/мм/рр)"><br>
		<input type="text" name="" placeholder="Строк, до якого брався кредит (дд/мм/рр)"><br>

		Натиснiть, якщо кредит отримувався траншами <button onclick="">+</button><br>

		Вiтсоткова ставка: <br>
		<input type="radio" placeholder="Фiксована"><br>
		<input type="radio" placeholder="Плаваюча"><br>
		<input type="radio" placeholder="Змiшана"><br>
	
		Тип нарахування вiтсотковой частки:<br>
		<input type="radio" placeholder="факт/факт"><br>
		<input type="radio" placeholder="факт/360"><br>
		<input type="radio" placeholder="30/360"><br>

		Тип погашення кредту:<br>
		<input type="radio" placeholder="Класика"><br>
		<input type="radio" placeholder="Ануйтет"><br>




		<input type="text" name="" placeholder=""><br>

		<button type="submit">Отправить данные</button>

	</form>
</body>
</html>


<?php





?>