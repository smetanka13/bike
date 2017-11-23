<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="../css/autorization.css">


</head>
<body>

	


	<!-- *******************************BODY*************** -->
	<div class="login login-action-login wp-core-ui-locale-ru-ru">

		<div id="login">
			<form name="loginform" id="loginform" action="http://AddressForever_web/autorization.php" method="post">
				<p>
					<label for="user_login">
						"имя пользователя или e-mail"
						<br>
						<input type="text" name="log" id="user_login" class="input" value size="20">
					</label>
				</p>
				<p>
					<label for="user_pass">
					"Пароль"
					<br>
					<input type="password" name="pwd" id="user_pass" class="input" value size="20">
					</label>
				</p>
				<p class="forgetmenot">
					<label for="rememberme">
						<input type="checkbox" name="rememberme" id="rememberme" value="forever">
						"запомнить меня"
						</label>
				</p>
				<p class="submit">
					<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="войти">
					<input type="hidden" name="redirect_to" value="http://AddressForever.com/wp-admin/profile.php">
					<input type="hidden" name="testcookie" value="1">
				</p>
			</form>
			<p id="nav">
			<a href="#">Забыли пароль?</a>	
			</p>
		<script type="text/javascript">
			function wp_attempt_focus(){
			setTimeout( function(){ try{
			d = document.getElementById('user_login');
			d.focus()
			d.select()
			} catch(e){}
			}, 200);
			}	
			wp_attempt_focus();
			if(typeof wpOnload=='function')wpOnload();
		</script>
			







	<!-- *****************************FOOTER*************** -->

		<?php include 'footer.php' ?>
		
	</div>

	<!-- FOR DATE INPUTS -->
	<script>

	    $("#datepicker").datepicker({
	    	changeMonth:true, 
	    	changeYear:true ,
	    	defaultDate:null
	    });

	    $("#datepicker2").datepicker({
	    	changeMonth:true, 
	    	changeYear:true ,
	    	defaultDate:null
	    });

	</script>

</body>
</html>
    