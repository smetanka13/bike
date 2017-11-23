<!DOCTYPE html>
<html>
<head>

	<?php include 'links.php'; ?>

	<link rel="stylesheet" type="text/css" href="../css/main_page.css">

</head>
<body>

<div class="page">
<!-- ****************************HEADER**************** -->

	<?php include 'header.php'; ?>

<!-- *******************************BODY*************** -->

<div class="wrapper container-fluid">

	<div class="container-fluid">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 slogan">
			<h1>
				AddressForever - it`s <br>all time communication <br>for people worldwide.
				<!-- AddressForever - <br>связь для всех и навсегда. -->
			</h1>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 social_logos">
			<ul class="nav navbar-nav social_bar row">
				<li><a href="#"><img class="s_logo" src="../images/icons/twitter.svg"></a></li>
				<li><a href="#"><img class="s_logo" src="../images/icons/facebook.svg"></a></li>
				<li><a href="#"><img class="s_logo" src="../images/icons/vk.svg"></a></li>
				<li><a href="#"><img class="s_logo" src="../images/icons/google.svg"></a></li>
			</ul>  
		</div>
		<img class="img-responsive col-lg-12 col-mg-12 col-sm-12 col-xs-12 img_back_main" src="../images/main/main_back.jpg">
	</div>

	<div class="second_main_block container-fluid">
		<div class=" sign_block col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="but_lable_block row">
				<label class="label_reg_main hidden-xs hidden-sm">Создать аккаунт</label>
				<button data-toggle="modal" data-target="#regist_bar" class="sec_block_reg_but button button-default">SIGN IN</button>
			</div>
		</div>
		<div class=" regist_block col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="but_lable_block row">
				<label class="label_reg_main hidden-xs hidden-sm">Войти в аккаунт</label>
				<button class="sec_block_reg_but button button-default" data-toggle="modal" data-target="#login_bar">LOG IN</button>
			</div>
		</div>
	</div>

	<div class="third_main_block container-fluid">
		<div class="some_info_block_back col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<div class="some_info_block"><a href="#">
				<img class="some_info_img" src="../images/main/first.jpg">
				<div class="some_info_txt">
					<h4 id="some_title1" class="some_info_title">Заголовок</h4>
					<p class="some_info_text">Тут располагается информация.</p>
				</div>
			</a></div>
		</div>

		<div class="some_info_block_back col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<div class="some_info_block"><a href="#">
				<img class="some_info_img" src="../images/main/second.jpg">
				<div class="some_info_txt">
					<h4 id="some_title1" class="some_info_title">Заголовок</h4>
					<p class="some_info_text">Тут располагается информация.</p>
				</div>
			</a></div>
		</div>

		<div class="some_info_block_back col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<div class="some_info_block"><a href="#">
				<img class="some_info_img" src="../images/main/third.jpg">
				<div class="some_info_txt">
					<h4 id="some_title1" class="some_info_title">Заголовок</h4>
					<p class="some_info_text">Тут располагается информация.</p>
				</div>
			</a></div>
		</div>

		<div class="some_info_block_back col col-xs-6 col-sm-3 col-md-3 col-lg-3">
			<div class="some_info_block"><a href="#">
				<img class="some_info_img" src="../images/main/fourth.jpg">
				<div class="some_info_txt">
					<h4 id="some_title1" class="some_info_title">Заголовок</h4>
					<p class="some_info_text">Тут располагается информация.</p>
				</div>
			</a></div>
		</div>

	</div>

	<div id="login_bar" class="container enter_reg_block fade">
		<form class="enter_reg_place">
			<div class="form-group">
				<button class="close" data-dismiss="modal">x</button>
				<h4 class="main_title">Вход</h4>
			</div>
		  <div class="form-group">
		    <label for="inputEmail" class="enter_reg_lable">Email:</label>
		    <input type="email" class="form-control" id="inputEmail" placeholder="Введите email">
		  </div>
		  <div class="form-group">
		    <label for="inputPassword" class="enter_reg_lable">Пароль:</label>
		    <input type="password" class="form-control" id="inputPassword" placeholder="Введите пароль">
		  </div>
		  <div class="checkbox hidden-xs">
		    <label>
		      <input type="checkbox">Запомнить
		    </label>
		    <a href="#" class="pass_get">Забыли пароль?</a>
		  </div>

		  <div class="form-group visible-xs">
			  <div class="checkbox">
			    <label>
			      <input type="checkbox">Запомнить
			    </label>
			    <div class="pass_get"><a href="#">Забыли пароль?</a></div>
			  </div>
		  </div>
		  <button type="submit" class="btn confirm_but">Войти</button>
	</div>

	<div id="regist_bar" class="container enter_reg_block fade">
		 <form class="enter_reg_place">
			<div class="form-group">
				<button class="close" data-dismiss="modal">x</button>
				<h4 class="main_title">Регистрация</h4>
			</div>
		  <div class="form-group">
		    <label for="inputEmail" class="enter_reg_lable">Email:</label>
		    <input type="email" class="form-control" id="inputEmail" placeholder="Введите email">
		  </div>
		  <div class="form-group">
		    <label for="inputText" class="enter_reg_lable">Логин:</label>
		    <input type="text" class="form-control" id="inputLogin" placeholder="Введите логин">
		  </div>
		  <div class="form-group">
		    <label for="inputPassword" class="enter_reg_lable">Пароль:</label>
		    <input type="password" class="form-control" id="inputPassword" placeholder="Введите пароль">
		  </div>
		  <div class="form-group">
		    <label for="inputPassword" class="enter_reg_lable">Подтвердите пароль:</label>
		    <input type="password" class="form-control" id="confirmPassword" placeholder="Введите пароль">
		  </div>
		  
		  <button type="submit" class="btn confirm_but">Зарегистрироваться</button>
		</form>
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

		// $('.s_logo').addClass("hidden_css").viewportChecker({
  //           classToAdd:'visible_css animated zoomIn',
		// });
		$('.sec_block_reg_but').addClass("hidden_css").viewportChecker({
            classToAdd:'visible_css animated fadeIn',
		});
		$('.some_info_block').addClass("hidden_css").viewportChecker({
            classToAdd:'visible_css animated zoomIn',
		});
		$('.img_logo_foot').addClass("hidden_css").viewportChecker({
            classToAdd:'visible_css animated zoomIn',
		});
	});
</script>

</body>
</html>
    