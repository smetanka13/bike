<!DOCTYPE html>
<html>
<head>
	<?php include 'links.php' ?>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>

	<?php include 'header.php'; ?>
		
	<div class="page">
		<div class="container main_cnt">
			<form class="form_prod btm">
				<h4 class="main_title btm">Велосипеды</h4>
			  <div class="form-group">
			    <label>Введите модель:</label>
			    <input type="text" class="form-control"  placeholder="Введите модель">
			  </div>
			  <div class="form-group">
			    <label>Введите бренд:</label>
			    <input type="text" class="form-control"  placeholder="Введите бренд">
			  </div>
			  <div class="form-group">
			    <label>Введите поставщика:</label>
			    <input type="text" class="form-control"  placeholder="Введите поставщика">
			  </div>
			  <div class="form-group">
			    <label>Введите категорию:</label>
			    <input type="text" class="form-control"  placeholder="Введите категорию">
			  </div>
			  <div class="form-group">
			    <label>Введите краткое описание:</label>
			    <textarea type="text" class="form-control"  placeholder="Введите краткое описание"></textarea> 
			  </div>
			  <div class="form-group">
			    <label>Загрузите картинку:</label>
			    <input type="file" class="form-control"  placeholder="Загрузите картинку">
			  </div>
			  <div class="form-group">
			    <label>Введите количество ед. на складе:</label>
			    <input type="number" class="form-control"  placeholder="Введите количество на складе">
			  </div>
			  <div class="form-group">
			    <label>Введите цену за 1 ед. товара:</label>
			    <input type="number" class="form-control"  placeholder="Введите цену">
			  </div>
			  <div class="form-group">
			    <button class="wth_boot_but confirm_but">Сохранить</button>
			  </div>
			</form>

			<form class="form_prod btm">
				<h4 class="main_title btm">Персонал</h4>
			  <div class="form-group">
			    <label>Введите имя:</label>
			    <input type="text" class="form-control"  placeholder="Введите имя">
			  </div>
			  <div class="form-group">
			    <label>Введите фамилию:</label>
			    <input type="text" class="form-control"  placeholder="Введите фамилию">
			  </div>
			  <div class="form-group">
			    <label>Введите отчество:</label>
			    <input type="text" class="form-control"  placeholder="Введите отчество">
			  </div>
			  <div class="form-group">
			    <label>Введите возраст:</label>
			    <input type="number" class="form-control"  placeholder="Введите возраст">
			  </div>
			  <div class="form-group">
			    <label>Введите дату приема на работу:</label>
			    <input type="date" class="form-control"  placeholder="Введите возраст">
			  </div>
			  <!-- <div class="form-group">
			    <label>Загрузите картинку:</label>
			    <input type="file" class="form-control"  placeholder="Загрузите картинку">
			  </div> -->
			  <div class="form-group">
			    <label>Введите зароботную плату за 1 месяц:</label>
			    <input type="number" class="form-control"  placeholder="Введите зароботную плату за 1 месяц">
			  </div>
			  <div class="form-group">
			    <label>Введите должность:</label>
			    <input type="text" class="form-control"  placeholder="Введите должность">
			  </div>
			  <div class="form-group">
			    <button class="wth_boot_but confirm_but">Сохранить</button>
			  </div>
			</form>

			<form class="form_prod btm">
				<h4 class="main_title btm">Поставщик</h4>
			  <div class="form-group">
			    <label>Введите имя:</label>
			    <input type="text" class="form-control"  placeholder="Введите имя">
			  </div>
			  <div class="form-group">
			    <label>Введите фамилию:</label>
			    <input type="text" class="form-control"  placeholder="Введите фамилию">
			  </div>
			  <div class="form-group">
			    <label>Введите отчество:</label>
			    <input type="text" class="form-control"  placeholder="Введите отчество">
			  </div>
			  <div class="form-group">
			    <button class="wth_boot_but confirm_but">Сохранить</button>
			  </div>
			</form>

			<form class="form_prod btm">
				<h4 class="main_title btm">Бренд</h4>
			  <div class="form-group">
			    <label>Введите название:</label>
			    <input type="text" class="form-control"  placeholder="Введите название">
			  </div>
			  <div class="form-group">
			    <label>Введите страну производителя:</label>
			    <input type="text" class="form-control"  placeholder="Введите страну производителя">
			  </div>
			  <div class="form-group">
			    <button class="wth_boot_but confirm_but">Сохранить</button>
			  </div>
			</form>
		</div>
		<?php include'footer.php' ?>
	</div>
</body>

</html>
