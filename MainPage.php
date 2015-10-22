<?php
Error_Reporting(E_ALL & ~E_NOTICE);
header('Content-Type: text/html; charset=windows-1251');
function index(){
	echo '<form class="form" method="post" action="">
	<label for="authentication">Вход в систему недоступен!</label>
	<input type = "submit" name = "authentication" value = "Аутентификация">
	</form>';
}
function showPage(){
	echo '<form class="exit" method="post" action="">
	<input type = "submit" name = "exit" value = "Выход из программы">
	</form>';
	echo '
	<div class="container">
	<h1>Главное меню</h1>
	<ul>
	<li><a href="1_2.php">Склад Материалов</a></li>
	<li><a href="3_2.php">Склад готового Товара</a></li>
	<li><a href="2_2.php">Цех</a></li>
	<li><a href="4_2.php">Каталог Коллекций</a></li>
	<li><a href="5_2.php">Каталог Артикулов</a></li>
	<li><a href="6_2.php">Каталог Актов</a></li>
	<li><a href="7_2.php">Каталог Материалов</a></li>
	<li><a href="8_2.php">Формирование Отчётов</a></li>
	<li><a href="9_2.php">Создание Аккаунта</a></li>
	</ul>
	</div>
	';
}
if($_REQUEST['exit']){
	setcookie('login', $login, time() - 60*30, '/');
	setcookie('password', $password, time() - 60*30, '/');
	header ('Location: index.php'); // перенаправление на аутентификацию
}
if($_REQUEST['authentication']){
	header ('Location: index.php'); // перенаправление на аутентификацию
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<title>Главное меню</title>
		<link rel="stylesheet" type="text/css" href="MainPage.css">
	</head>
	<body>	
<?php 
	if (isset($_COOKIE['login']) && $_COOKIE['password']) showPage();
	else index();
?>
	</body>
</html>