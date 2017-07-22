<html>
<head>
    <title>Вход в гостевую книгу</title>
</head>
<body>

<?php

function logIn(){ //функция входа в админку
	echo "<form method=\"post\"><br/>
    <p>Логин: <input type=\"text\" name=\"login\" autocomplete=\"on\" ></p>
    <p>Пароль: <input type=\"password\" name=\"password\" ></p>
    <p><input type=\"submit\" value=\"Вход\" ></p>
    <a href=\"registration.php\">Регистрация</a>
    </form>";
	}

function registrationNewUser () {  //регистрация нового пользователя
		
	}
	
	
if (count($_POST)){
	
	$login = $_POST['login'];
	$password = $_POST['password'];
	
	echo $login.$password;
	
	$regexpLogin = '/^[a-z0-9_-]{3,16}$/'; // Буквы, цифры, дефисы и подчёркивания, от 3 до 16 символов.
	$regexpPassword = '/^[a-z0-9_-]{6,18}$/'; // Буквы, цифры, дефисы и подчёркивания, от 6 до 18 символов.
	
	if ((preg_match($regexpLogin, $login)) && (preg_match($regexpPassword, $password))){
			echo "ура все получилось!!!";
		}
		
	else {
		echo "Логин/пароль введен некорректно! Попробуйте еще раз.";
			logIn();
	}
		
	
	}

else {
    logIn();
    };

	
	
	?>

</body>
</html>