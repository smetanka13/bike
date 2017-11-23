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
	<link rel="stylesheet" type="text/css" href="../css/resting_place.css">
	<link rel="stylesheet" type="text/css" href="../css/main_page.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans|Bree+Serif|Abril+Fatface|Ubuntu" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/animate.css" />
	<title>AddressForever</title>

</head>
<body>

<div class="page">

<!-- ****************************HEADER**************** -->

	<?php include 'header.php'; ?>

<!-- *******************************BODY*************** -->

<div class="wrapper container-fluid">
	<div class="nek_1st_block">
		<form role="form" class="form-inline">
				<div class="form-group">
					<select class="country_select">
						<option>Украина</option>
						<option>Россия</option>
						<option>США</option>
					</select>
				</div>
			</form>
	</div>
	<div class="third_main_block container-fluid">
		<div class="some_info_block_back col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<div class="some_info_block"><a href="#">
				<img class="some_info_img" src="../images/main/1cem.jpg">
				<div class="some_info_txt">
					<h4 id="some_title1" class="some_info_title">Западное кладбище</h4>
					<p class="some_info_text">Одесса, Тираспольское шоссе 7км, 18</p>
				</div>
			</a></div>
		</div>

		<div class="some_info_block_back col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<div class="some_info_block"><a href="#">
				<img class="some_info_img" src="../images/main/2cem.jpg">
				<div class="some_info_txt">
					<h4 id="some_title1" class="some_info_title">Новогородское кладбище</h4>
					<p class="some_info_text">Одесса, Таировское кладбище, 1</p>
				</div>
			</a></div>
		</div>

		<div class="some_info_block_back col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<div class="some_info_block"><a href="#">
				<img class="some_info_img" src="../images/main/3cem.jpg">
				<div class="some_info_txt">
					<h4 id="some_title1" class="some_info_title">Северное кладбище</h4>
					<p class="some_info_text">Одесса, Северное кладбище, 1</p>
				</div>
			</a></div>
		</div>

		<div class="some_info_block_back col col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<div class="some_info_block"><a href="#">
				<img class="some_info_img" src="../images/main/4cem.jpg">
				<div class="some_info_txt">
					<h4 id="some_title1" class="some_info_title">Еврейское кладбище</h4>
					<p class="some_info_text">Одесса, Химическая, 7</p>
				</div>
			</a></div>
		</div>
		<div class="some_info_block_back col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<div class="some_info_block"><a href="#">
				<img class="some_info_img" src="../images/main/1cem.jpg">
				<div class="some_info_txt">
					<h4 id="some_title1" class="some_info_title">Западное кладбище</h4>
					<p class="some_info_text">Одесса, Тираспольское шоссе 7км, 18</p>
				</div>
			</a></div>
		</div>

		<div class="some_info_block_back col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<div class="some_info_block"><a href="#">
				<img class="some_info_img" src="../images/main/2cem.jpg">
				<div class="some_info_txt">
					<h4 id="some_title1" class="some_info_title">Новогородское кладбище</h4>
					<p class="some_info_text">Одесса, Таировское кладбище, 1</p>
				</div>
			</a></div>
		</div>

		<div class="some_info_block_back col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<div class="some_info_block"><a href="#">
				<img class="some_info_img" src="../images/main/3cem.jpg">
				<div class="some_info_txt">
					<h4 id="some_title1" class="some_info_title">Северное кладбище</h4>
					<p class="some_info_text">Одесса, Северное кладбище, 1</p>
				</div>
			</a></div>
		</div>

		<div class="some_info_block_back col col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<div class="some_info_block"><a href="#">
				<img class="some_info_img" src="../images/main/4cem.jpg">
				<div class="some_info_txt">
					<h4 id="some_title1" class="some_info_title">Еврейское кладбище</h4>
					<p class="some_info_text">Одесса, Химическая, 7</p>
				</div>
			</a></div>
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
    