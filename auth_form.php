<?php 
	    defined('INDEX') OR die('Прямой доступ к странице запрещён!');
?>
<html>
	<head>
	    <meta charset="utf-8">

  		<!--Подключаем Jquery и UI-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		
	    <link rel="stylesheet" type="text/css" href="style.css">
	    <script src="script.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="auth">

				<!-- Форма авторизации -->
	            <form  id="ajax-login" action="login.php" method="post" autocomplete="off">
	                <h1>Вход</h1>
	                <p>
	                    <label for="username" class="uname" > Ваш логин </label>
	                    <input name="login" required="required" type="text"/>
	                </p>
	                <p>
	                    <label for="password" class="youpasswd" > Ваш пароль </label>
	                    <input name="password" required="required" type="password" />
	                </p>
	                <p class="button">
	                    <input type="submit" id="log_in" value="Войти" />
	                </p>
	                <p class="link">
	                    <a href="#" id="to_signup" >Регистрация</a>
	                </p>
	            </form>
		 		
		 		<!-- Форма регистрации -->
	            <form  id="ajax-signup" action="reg.php" autocomplete="off">
	                <h1> Регистрация </h1>
	                <p>
	                    <label for="name">Ваше имя:</label>
	                    <input name="name" required="required" type="text"/>
	                </p>
	                <p>
	                    <label for="birth">Дата рождения: </label> <br>
	                    <input name="birth" required="required" type="date"/>
	                </p>
	                <p>
	                    <label for="login">Ваш логин:</label>
	                    <input name="login" required="required" type="text" />
	                </p>
	                <p>
	                    <label for="email">Ваш e-mail:</label>
	                    <input name="email" required="required" type="email"/>
	                </p>
	                <p>
	                    <label for="password">Ваш пароль: </label>
	                    <input name="password" required="required" type="password" />
	                </p>
	                <p>
	                    <label for="password_conf">Подтвердите пароль: </label>
	                    <input name="password_conf" required="required" type="password" />
	                </p>
	                <p class="button">
	                    <input type="submit" value="Зарегистрировать"/>
	                </p>
	                <p class="link">
	                    Уже есть аккаунт? <a href="#" id="to_login"> Войти </a>
	                </p>
	            </form>
		        <div id="form-messages"></div>
		    </div>
		</div>
		
	</body>
</html>