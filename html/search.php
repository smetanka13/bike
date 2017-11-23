<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="icon" href="../images/icons/letter.png">
	<link rel="stylesheet" type="text/css" href="../library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../library/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../library/bootstrap/fonts/glyphicons-halflings-regular.eot">
	<link rel="stylesheet" type="text/css" href="../css/main_body.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans|Bree+Serif|Abril+Fatface|Ubuntu" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/search.css">
	<title>AddressForever</title>

</head>
<body>

<div class="page">

<!-- ****************************HEADER**************** -->

	<?php include 'header.php'; ?>

<!-- *******************************BODY*************** -->
<div class="wrapper container-fluid">

	<div class="container-fluid search_filt_bar">
		<form role="form" class="navbar-form search_form">
			<div class="form-group search_bar1 container">
				<input type="search" name="search" class=" form-control search_filter" id="search_place" placeholder="Нажмите для поиска ..."><image class="search_icon search_icon_filter" src="../images/icons/search.svg">
			</div>
		</form>
			
		<div class="row filters_selects hidden-xs">
			<div class="search1 container">
				<form role="form" method="post" id="search_form1" class="selectpicker">
				<div class="form-group filt_cat_select">
					<label for="inputDate">Введите дату рождения:</label>
    				<input type="date" class="form-control">
				</div>
				</form>
			</div>
			<div class="search1 container">
				<form role="form" method="post" id="search_form1" class="selectpicker">
				<div class="form-group filt_cat_select">
					<label for="inputDate">Введите дату смерти:</label>
    				<input type="date" class="form-control">
				</div>
				</form>
			</div>
			<div class="search1 container">
				<form role="form" method="post" id="search_form2" class="selectpicker">
				<div class="form-group filt_cat_select">
				<label for="inputDate">Выберите страну:</label>
					<select name="country" id="country" class="form-control button_style1">
						<option value="" class="button_style">Страна</option>
						<option value="Latest">Россия</option>
						<option value="Featured">Украина</option>
						<option value="Most Popular">США</option>
					</select>
				</div>
				</form>
			</div>
			<div class="search1 container">
				<form role="form" method="post" id="search_form3" class="selectpicker">
				<div class="form-group filt_cat_select">
				<label for="inputDate">Выберите город:</label>
					<select name="city" id="city" class="form-control button_style1">
					<!-- СДЕЛАТЬ ПОИСК ПО ГОРОДАМ -->
						<option value="" class="button_style">Город</option>
						<option>Одесса</option>
						<option>Киев</option>
					</select>
				</div>
				</form>
			</div>
			<div class="search1 container">
				<form role="form" method="post" id="search_form4" class="selectpicker">
				<div class="form-group filt_cat_select">
				<label for="inputDate">Выберите пол:</label>
					<select name="male" id="male" class="form-control button_style1">
						<option value="" class="button_style">Пол</option>
						<option>Мужской</option>
						<option>Женский</option>
					</select>
				</div>
				</form>
			</div>
		</div>


		<!-- FOR XS DISPLAYS -->
		<div class="row filters_selects visible-xs">
			<div class="search2">
				<form role="form" method="post" id="search_form1" class="selectpicker">
				<div class="form-group filt_cat_select">
					<label for="inputDate">Введите дату рождения:</label>
    				<input type="date" class="form-control">
				</div>
				</form>
			</div>
			<div class="search2">
				<form role="form" method="post" id="search_form1" class="selectpicker">
				<div class="form-group filt_cat_select">
					<label for="inputDate">Введите дату смерти:</label>
    				<input type="date" class="form-control">
				</div>
				</form>
			</div>
			<div class="search2">
				<form role="form" method="post" id="search_form2" class="selectpicker">
				<div class="form-group filt_cat_select">
				<label for="inputDate">Выберите страну:</label>
					<select name="country" id="country" class="form-control button_style1">
						<option value="" class="button_style">Страна</option>
						<option value="Latest">Россия</option>
						<option value="Featured">Украина</option>
						<option value="Most Popular">США</option>
					</select>
				</div>
				</form>
			</div>
			<div class="search2">
				<form role="form" method="post" id="search_form3" class="selectpicker">
				<div class="form-group filt_cat_select">
				<label for="inputDate">Выберите город:</label>
					<select name="city" id="city" class="form-control button_style1">
					<!-- СДЕЛАТЬ ПОИСК ПО ГОРОДАМ -->
						<option value="" class="button_style">Город</option>
						<option>Одесса</option>
						<option>Киев</option>
					</select>
				</div>
				</form>
			</div>
			<div class="search2">
				<form role="form" method="post" id="search_form4" class="selectpicker">
				<div class="form-group filt_cat_select">
				<label for="inputDate">Выберите пол:</label>
					<select name="male" id="male" class="form-control button_style1">
						<option value="" class="button_style">Пол</option>
						<option>Мужской</option>
						<option>Женский</option>
					</select>
				</div>
				</form>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row s_memor_block">
			<a href="#"><div class="dead_img">
				<img class="img-responsive" src="../images/main/3.jpg">
			</div></a>
			<div class="dead3 main_text dead_text">
				<a href="#"><h4 class="no_wrap_title main_title about_main_title about_title_hover">Криспин Криспиньяно Сталинославовна</h4></a>
				<h4 class="no_wrap_title main_title about_main_title">(22/09/1882) - (28/06/1900)</h4>
				<p class="no_wrap_title main_title post_main_title">this memorial was posted by Name Name on 00 mounth 0000</p>
			</div>
		</div>

		<div class="row s_memor_block">
			<a href="#"><div class="dead_img">
				<img class="img-responsive" src="../images/main/pers.jpg">
			</div></a>
			<div class="dead3 main_text dead_text">
				<a href="#"><h4 class="no_wrap_title main_title about_main_title about_title_hover">Иоганн Себастьян Бах</h4></a>
				<h4 class="no_wrap_title main_title about_main_title">(31/03/1685) - (28/06/1750)</h4>
				<p class="no_wrap_title main_title post_main_title">this memorial was posted by Name Name on 00 mounth 0000</p>
			</div>
		</div>

	</div>


</div>

<!-- *****************************FOOTER*************** -->

	<?php include 'footer.php' ?>
	
</div>

<script type="text/javascript" src="../library/jquery/jquery-3.2.1.js"></script>

<script src="../library/jquery/jquery.viewportchecker.min.js"></script>

<script type="text/javascript" src="../library/bootstrap/js/bootstrap.min.js"></script>

<!-- FOR LIGHT ANIMATE WITH ANIMATE CSS -->
<!-- !!!устранить мигание!!! -->
<script type="text/javascript">
	$(document).ready(function() {

		$('.img_logo_foot').addClass("hidden_css").viewportChecker({
            classToAdd:'visible_css animated zoomIn',
		});

	});
</script>

</body>
</html>
    